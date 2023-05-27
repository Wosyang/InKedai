<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopUpController extends Controller
{

    public function topup()
    {
    	// mengambil data dari table pegawai
    	$saldosekarang = DB::table('kedaiwallet')->get();

    	// mengirim data pegawai ke view index
    	return view('topup',['kedaiwallet' => $saldosekarang]);

    }

        // method untuk insert data ke table pegawai

        public function store(Request $request)
        {
	// insert data ke table pegawai
	DB::table('kedaiwallet')->insert([
		'saldo_sekarang' => $request->topup,
        'jumlahSaldo_wallet'=> $request->jumlahsebelumnya
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/topup');

}


}
