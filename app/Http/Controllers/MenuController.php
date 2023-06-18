<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    public function index()
    {
        // mengambil data dari table menu
        $menu = DB::table('menu')->get();

        // mengirim data menu ke view index
        return view('MenuPenjual.menu', ['menu' => $menu]);
        // return view('MenuPenjual.uploadmenu');

    }

    // method untuk menampilkan view form tambah menu
    public function tambah()
    {
        // memanggil view tambah
        return view('MenuPenjual.menu_tambah');
    }

    // method untuk insert data ke table menu
    public function store(Request $request)
    {
        // insert data ke table menu
        DB::table('menu')->insert([
            'nama' => $request->nama,
            'deskripsi_menu' => $request->deskripsi,
            'stok_menu' => $request->stok,
            'harga_menu' => $request->harga,
            'penjualId' => auth()->user()->id,
        ]);
        // alihkan halaman ke halaman menu
        return redirect('/menu');
    }

    // method untuk edit data menu
    public function edit($id)
    {
        // mengambil data menu berdasarkan id yang dipilih
        $menu = Menu::where('id', $id)->first();
        // passing data menu yang didapat ke view edit.blade.php
        return view('MenuPenjual.menu_edit', ['menu' => $menu]);
    }

    // update data menu
    public function update(Request $request)
    {
        // update data menu
        DB::table('menu')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'deskripsi_menu' => $request->deskripsi,
            'stok_menu' => $request->stok,
            'harga_menu' => $request->harga,
        ]);
        // alihkan halaman ke halaman menu
        return redirect('/menu');
    }

    // method untuk hapus data menu
    public function delete($id)
    {
        Menu::where('id', $id)->delete();
        // alihkan halaman ke halaman menu
        return redirect('/menu');
    }
}
