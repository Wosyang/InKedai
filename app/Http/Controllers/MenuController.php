<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class MenuController extends Controller
{
	public function index()
	{
    	// mengambil data dari table menu
		$menu = DB::table('menu')->get();
 
    	// mengirim data menu ke view index
		return view('menu',['menu' => $menu]);
 
	}
 
	// method untuk menampilkan view form tambah menu
	public function tambah()
	{
 
		// memanggil view tambah
		return view('menu_tambah');
 
	}
 
	// method untuk insert data ke table menu
	public function store(Request $request)
	{
		// insert data ke table menu
		DB::table('menu')->insert([
			'nama_menu' => $request->nama,
			'deskripsi_menu' => $request->deskripsi,
			'stok_menu' => $request->stok,
			'harga_menu' => $request->harga,
            'id_kedai' => $request->idkedai  // foreign key
		]);
		// alihkan halaman ke halaman menu
		return redirect('/menu');
 
	}
 
	// method untuk edit data menu
	public function edit($id)
	{
		// mengambil data menu berdasarkan id yang dipilih
		$menu = DB::table('menu')->where('id',$id)->get();
		// passing data menu yang didapat ke view edit.blade.php
		return view('menu_edit',['menu' => $menu]);
 
	}
 
	// update data menu
	public function update(Request $request)
	{
		// update data menu
		DB::table('menu')->where('id',$request->id)->update([
			'nama_menu' => $request->nama,
			'deskripsi_menu' => $request->deskripsi,
			'stok_menu' => $request->stok,
			'harga_menu' => $request->harga,
            'id_kedai' => $request->idkedai  //foreign key
		]);
		// alihkan halaman ke halaman menu
		return redirect('/menu');
	}
 
	// method untuk hapus data menu
	public function hapus($id)
	{
		// menghapus data menu berdasarkan id yang dipilih
		DB::table('menu')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman menu
		return redirect('/menu');
	}
}