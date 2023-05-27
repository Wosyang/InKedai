<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukPenjualController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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



