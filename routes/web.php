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

//route default
Route::get('/', function () {
    return view('welcome');
});

//route latihan
Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
Route::get('blog', function () {
    return view('blog');
});

//route with method get and post
Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

//route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');


//route CRUD
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
