<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/daftar', [UserController::class, "register"]);
Route::post('/daftar', [UserController::class, "store"]);
Route::get('/masuk', [UserController::class, "login"]);
Route::post('/masuk', [UserController::class, "doLogin"]);
Route::get('/tentang', [AboutController::class, "about"]);
Route::get('/hubungi', [AboutController::class, "hubungi"]);
Route::get('/', function (){ return redirect('/home');});

Route::get('/logout', [UserController::class, "logout"]);

Route::group(['middleware' => ['admin_auth']], function () {
    Route::get('/admin-pengguna', function () {return view('admin_pengguna');});
    Route::get('/admin-transaksi', function () {return view('admin_transaksi');});
    Route::get('/admin-penarikan', function () {return view('admin_penarikan');});
});

Route::group(['middleware' => ['web_auth']], function () {
    Route::get('/home', [HomeController::class, "index"]);
    Route::get('/detail-buku/{id}', [ProductController::class, "detail"]);
    Route::get('/keranjang', [CartController::class, "index"]);

    Route::get('/keranjang/add/{id}', [CartController::class, "addToCart"]);

    Route::get('/pembayaran', 'App\Http\Controllers\TransaksiController@showpembayaran');

    Route::get('/bukti-transfer', function () {return view('infopembayaran');});

    Route::get('/profile', 'App\Http\Controllers\ProfileController@show')
            ->name('showprofile');
    Route::get('/edit-profile', 'App\Http\Controllers\ProfileController@showedit')
            ->name('showeditprofile');        
    Route::post('/edit-profile/{id}', 'App\Http\Controllers\ProfileController@update')
            ->name('updateprofile');
    Route::post('/input-rekening', 'App\Http\Controllers\RekeningController@inputdetail')
            ->name('inputrekening');

    Route::get('/pesanan', function () {return view('pesanan');});
    
    Route::get('/produk', 'App\Http\Controllers\ProductController@show')
            ->name('showproduk');

            
    Route::get('/edit-buku/{id}',  'App\Http\Controllers\ProductController@showeditdetail')
            ->name('showeditbuku');;
    Route::patch('/editbuku/{id}',  'App\Http\Controllers\ProductController@editdetail')
            ->name('editdetail');;
    Route::delete('/delete-buku/{id}',  'App\Http\Controllers\ProductController@deleteproduk')
            ->name('deleteproduk');;

    Route::get('/tambah-buku', function () { return view('produk_tambah');});
    Route::post('/input-produk', 'App\Http\Controllers\ProductController@inputdetail')
            ->name('inputproduk');

    Route::get('/penjualan', function () { return view('penjualan');});
    Route::get('/penghasilan', function () {return view('penghasilan');});
    Route::get('/ajukan', function () {return view('penghasilan_info');});
});


