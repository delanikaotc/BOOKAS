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
Route::get('/BOOKAS', function () {
    return view('landingpage');
});

Route::get('/daftar-BOOKAS', function () {
    return view('daftar');
});

Route::get('/masuk-BOOKAS', function () {
    return view('masuk');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/detail-buku', function () {
    return view('detailbuku');
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

Route::get('/admin-pengguna', function () {
    return view('admin_pengguna');
});

Route::get('/admin-transaksi', function () {
    return view('admin_transaksi');
});

Route::get('/admin-penarikan', function () {
    return view('admin_penarikan');
});