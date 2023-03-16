<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/create', function () {
    return view('index');
});

Route::get('user/add_user', 'App\Http\Controllers\AdminController@create')->name('add_user');
Route::get('/login', '\App\Http\Controllers\ParkirController@create');
Route::get('/test', function () {
    return view('test');
});