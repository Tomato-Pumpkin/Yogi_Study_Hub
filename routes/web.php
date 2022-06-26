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

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/menu', function () {
    return view('menu', [
        "title" => "Menu",
    ]);
});

Route::get('/transaksi', function () {
    return view('transaksi', [
        "title" => "Transaksi",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Yogi Firdiansyah",
        "email" => "yogi.firdiansyah.yogi@gmail.com",
        "image" => "yogi.jpeg"
    ]);
});

Route::get('/user', function () {
    return view('user', [
        "title" => "User",
    ]);
});

Route::get('/barang', function () {
    return view('barang', [
        "title" => "Barang",
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login",
    ]);
});
