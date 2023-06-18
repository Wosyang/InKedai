<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukPenjualController;
use App\Http\Controllers\DaftarPembeliController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use resources\views\Pembeli\login_pembeli;
use resources\views\Pembeli\register_pembeli;
use resources\views\Penjual\login_penjual;
use resources\views\Penjual\register_penjual;
use resources\views\dashboard;

//route CRUD
//Route::get('/daftarpembeli','DaftarPembeliController@daftarpembeli');

Route::get('/halo', function () {
	return "Halo, Silahkan lakukan login";
});


Route::get('/login', [LoginController::class, 'index'])->name('login');


//akun pembeli
//register
  Route::get('/register_pembeli', [PembeliController::class, 'registration'])->name('regisPembeli');
  Route::post('/register_pembeli', [PembeliController::class, 'authRegis'])->name('regisPembeli.auth');

//login
  Route::get('/login_pembeli', [PembeliController::class, 'index'])->name('loginPembeli');
  Route::post('/login_pembeli', [PembeliController::class, 'authLogin'])->name('loginPembeli.auth');

  //logout
  Route::get('/logout_pembeli', [PembeliController::class, 'signOut'])->name('signOutPembeli');


  Route::middleware('auth:pembelis')->group(function () {
    Route::get('homePembeli', [PembeliController::class, 'homePembeli']); 
    Route::get('/pembeli/topup', [PembeliController::class, 'topup']); 
  });

//akun Penjual
//register
Route::get('/register_penjual', [PenjualController::class, 'registration'])->name('regisPenjual');
Route::post('/register_penjual', [PenjualController::class, 'authRegis'])->name('regisPenjual.auth');

//login
Route::get('/login_penjual', [PenjualController::class, 'index'])->name('loginPenjual');
Route::post('/login_penjual', [PenjualController::class, 'authLogin'])->name('loginPenjual.auth');

//logout
Route::get('/logout_penjual', [PenjualController::class, 'signOut'])->name('signOutPenjual');


Route::middleware('auth:penjuals')->group(function () {
  Route::get('homePenjual', [PenjualController::class, 'homePenjual']); 
  Route::get('daftarPesanan', [PenjualController::class, 'daftarpesanan']);
  //menu
  Route::get('menu', [MenuController::class, 'index']);
  Route::get('menu/tambah', [MenuController::class, 'tambah']);
  Route::post('menu/tambah', [MenuController::class, 'store']);
});
