<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Pembeli;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PembeliController extends Controller
{

    public function index()
    {
        return view('Pembeli.login_pembeli');
    }


    public function authLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::guard('pembelis')->attempt($credentials)) {
            return redirect()->route('pembeli.home');
        }

        return redirect("login_pembeli")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('Pembeli.register_pembeli');
    }


    public function authRegis(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:Pembelis',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|min:6|same:password',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login_pembeli")->withSuccess('You have signed-up');
    }


    public function create(array $data)
    {
        return Pembeli::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function homePembeli()
    {
        if (Auth::check()) {
            return view('Pembeli.homePembeli');
        }

        return redirect("login_pembeli")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login_pembeli');
    }

    public function topup()
    {

        return view('Pembeli.topup');
    }

    public function menu()
    {
        return view('Pembeli.menu');
    }

    public function beli(Request $request)
    {
        $request->validate([
            'jumlah' => 'required',
        ]);

        $data = $request->all();

        $menu = Menu::find($request->route()->id);
        $pembeli = Pembeli::find(Auth::guard('pembelis')->user()->id);

        if ($pembeli->kedaiWallet < $data['jumlah'] * $menu->harga_menu) {
            return redirect()->route('pembeli.home');
        }

        if ($menu->stok_menu < $data['jumlah']) {
            return redirect()->route('pembeli.home');
        }

        $pembeli->kedaiWallet = (float)$pembeli->kedaiWallet - (float)$data['jumlah'] * $menu->harga_menu;
        $pembeli->save();

        $menu->update([
            'stok_menu' => $menu->stok_menu - $data['jumlah']
        ]);

        Pesanan::create([
            'pembeliId' => Auth::guard('pembelis')->user()->id,
            'menuId' => $request->route()->id,
            'jumlah' => $data['jumlah'],
            'biaya' => $data['jumlah'] * $menu->harga_menu,
            'status' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('pembeli.home');
    }

    public function pesanan()
    {
        $pesanan = Pesanan::where('pembeliId', Auth::guard('pembelis')->user()->id)->get();
        return view('Pembeli.pesanan', ['pesanans' => $pesanan]);
    }
}
