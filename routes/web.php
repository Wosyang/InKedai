<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukPenjualController;
use App\Http\Controllers\DaftarPembeliController;
use App\Http\Controllers\PembeliController;
use resources\views\Pembeli\login_pembeli;
use resources\views\Pembeli\register_pembeli;
use resources\views\dashboard;

//route CRUD
//Route::get('/daftarpembeli','DaftarPembeliController@daftarpembeli');

Route::get('/daftarpembeli', 'App\Http\Controllers\DaftarPembeliController@daftarpembeli');
Route::post('/daftarpembeli/store', 'App\Http\Controllers\DaftarPembeliController@store');
=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "Halo, Silahkan lakukan login";
});

/* Route::get('/login', 'App\Http\Controllers\MasukPenjualController@login'); */

/* Route::controller(MasukPenjualController::class)->group(function () { */
/*     Route::get('/login/{nama}', 'index'); */
    Route::get('/login', [MasukPenjualController::class, 'login'] );
/*     Route::post('/login/proses', 'app\Http\Controllers\MasukPenjualController@proses');
}); */
Route::post('/login/tambah', [MasukPenjualController::class, 'tambah'] );

//akun pembeli
//register
  Route::get('/register_pembeli', [PembeliController::class, 'registration'])->name('regis');
  Route::post('/register_pembeli', [PembeliController::class, 'authRegis'])->name('regis.auth');

//login
  Route::get('/login_pembeli', [PembeliController::class, 'index'])->name('login');
  Route::post('/login_pembeli', [PembeliController::class, 'authLogin'])->name('login.auth');

  //logout
  Route::get('/logout_pembeli', [PembeliController::class, 'signOut'])->name('signOut');


  Route::middleware('auth:pembelis')->group(function () {
    Route::get('dashboard', [PembeliController::class, 'dashboard']); 
});
