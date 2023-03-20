<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 
 //
 Route::get('/home', function(){
     return view('Home');
 });

 Route::get('/about', function(){
     return view('about');
 });


Route::get('/dashboard', function() {
    return view('dashboard.index');
});
 
Route::get('/pegawai', '\App\Http\Controllers\AdminController@index'); // Menampilkan data yang ada di database
Route::post('/pegawai/create', '\App\Http\Controllers\AdminController@create'); // Membuat data baru
Route::get('/pegawai/{id_user}/edit', '\App\Http\Controllers\AdminController@edit'); // Mengedit data yang sudah ada
Route::post('/pegawai/{id_user}/update', '\App\Http\Controllers\AdminController@update'); // Mengupdate data yang sudah diedit
Route::get('/pegawai/{id_user}/delete', '\App\Http\Controllers\AdminController@delete'); // Menghapus data