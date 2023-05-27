<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarPembeliController;

//route CRUD
//Route::get('/daftarpembeli','DaftarPembeliController@daftarpembeli');





Route::get('/daftarpembeli', 'App\Http\Controllers\DaftarPembeliController@daftarpembeli');
Route::post('/daftarpembeli/store', 'App\Http\Controllers\DaftarPembeliController@store');
