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

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/home', function () {
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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/edit-buku', function () {
    return view('produk_edit');
});

Route::get('/tambah-buku', function () {
    return view('produk_tambah');
});

Route::get('/penjualan', function () {
    return view('penjualan');
});

Route::get('/penghasilan', function () {
    return view('penghasilan');
});

Route::get('/ajukan', function () {
    return view('penghasilan_info');
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

