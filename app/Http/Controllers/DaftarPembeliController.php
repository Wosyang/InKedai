<?php

 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;


 class DaftarPembeliController extends Controller
 {
    public function daftarpembeli(){
        return view('daftarpembeli');
    }
    public function store(Request $request)
    {
    DB::table('akun_pembeli')->insert([
		'username_pembeli' => $request->nama,
		'email_pembeli' => $request->email,
		'password_pembeli' => $request->password
    ]);
 }
 }
