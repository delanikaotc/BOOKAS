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
    return view('home');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/bukti-transfer', function () {
    return view('infopembayaran');
});