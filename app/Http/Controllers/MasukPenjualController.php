<?php

namespace App\Http\Controllers; //nama package

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasukPenjualController extends Controller
//keyword class, karena sudah melakukan pembuatan inheritance induk controller maka keyword yg dipakai sama yaitu extends > jujur gapaham
{

    //di sini isi controller pegawai
    public function login(){

    	return view('login');
    }

    // method untuk menampilkan view form tambah pegawai
public function tambah(Request $request)
{

DB::table('akun_penjual')->insert([
    'email_penjual' => $request -> email_penjual,
    'password_penjual' => $request -> password_penjual,
    'nama_kedai' => $request -> nama_kedai
]);
	// memanggil view tambah


}

}
