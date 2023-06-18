<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjual;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PenjualController extends Controller
{

    public function index()
    {
        return view('Penjual.login_penjual');
    }

    public function authLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::guard('penjuals')->attempt($credentials)) {
            return redirect()->route('penjual.home')->withSuccess('Signed in');
        }

        return redirect("login_penjual")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('Penjual.register_penjual');
    }


    public function authRegis(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:Penjuals',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|min:6|same:password',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login_penjual")->withSuccess('You have signed-up');
    }


    public function create(array $data)
    {
        return Penjual::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function homePenjual()
    {
        if (Auth::check()) {
            return view('Penjual.homePenjual');
        }

        return redirect("login_penjual")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login_penjual');
    }

    public function menu()
    {
        return view('MenuPenjual.menu');
    }

    public function daftarPesanan()
    {
        return view('Penjual.daftarpesanan');
    }

    public function accept()
    {
        $pesanan = Pesanan::find(request()->route('id'));

        if (!$pesanan)
            return redirect()->back();

        if ($pesanan->status == 'ditolak')
            return redirect()->back();

        if ($pesanan->status == 'diproses')
            $pesanan->status = 'selesai';

        if ($pesanan->status == 'menunggu konfirmasi')
            $pesanan->status = 'diproses';

        $pesanan->save();

        return redirect()->back();
    }

    public function reject()
    {
        $pesanan = Pesanan::find(request()->route('id'));

        if (!$pesanan)
            return redirect()->back();

        if ($pesanan->status != 'menunggu konfirmasi')
            return redirect()->back();

        if ($pesanan->status == 'ditolak')
            return redirect()->back();

        $pesanan->status = 'ditolak';
        $pesanan->save();

        $pembeli = $pesanan->pembeli;
        $pembeli->kedaiWallet += (float)$pesanan->biaya;
        $pembeli->save();

        $menu = $pesanan->menu;
        $menu->stok_menu += $pesanan->jumlah;
        $menu->save();

        return redirect()->back();
    }
}
