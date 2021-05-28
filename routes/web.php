<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PencairanController;
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
    Route::get('/admin-pengguna', [AdminController::class, "index"]);
    Route::get('/admin-pengguna/delete/{id}', [AdminController::class, "destroy"]);
    // Route::get('/admin-transaksi', function () {return view('admin_transaksi');});
    Route::get('/admin-transaksi', [OrderController::class, "admin_transaksi"]);
    Route::get('/admin-confirm-order/{id}', [OrderController::class, "admin_confirm_order"]);
    // Route::get('/admin-penarikan', function () {return view('admin_penarikan');});
    Route::get('/admin-penarikan', [PencairanController::class, "admin_penarikan"]);
    Route::get('/admin-confirm-penarikan/{id}', [PencairanController::class, "admin_confirm_penarikan"]);
});

Route::group(['middleware' => ['web_auth']], function () {
    Route::get('/home', [HomeController::class, "index"]);
    Route::get('/pencarian', [SearchController::class, "index"]);
    Route::get('/detail-buku/{id}', [ProductController::class, "detail"]);
    Route::get('/keranjang', [CartController::class, "index"]);
    Route::get('/keranjang/add/{id}', [CartController::class, "addToCart"]);
    Route::get('/keranjang/delete/{id}', [CartController::class, "delete"]);

    Route::get('/pembayaran', [CartController::class, "pembayaran"]);
    Route::get('/pembayaran/{id}', [CartController::class, "pembayaran"]);
    // Route::get('/pembayaran', function () {return view('pembayaran');});
    Route::get('/create-order', [OrderController::class, "create_order"]);
    Route::get('/bukti-transfer/{id}', [OrderController::class, "bukti_transfer"]);
    Route::post('/upload-bukti', 'App\Http\Controllers\OrderController@upload_bukti')
            ->name('uploadbukti');
    // Route::get('/bukti-transfer', function () {return view('infopembayaran');});

    Route::get('/profile', 'App\Http\Controllers\ProfileController@show')
            ->name('showprofile');
    Route::get('/edit-profile', 'App\Http\Controllers\ProfileController@showedit')
            ->name('showeditprofile');
    Route::post('/edit-profile/{id}', 'App\Http\Controllers\ProfileController@update')
            ->name('updateprofile');

    Route::get('/edit-rekening', 'App\Http\Controllers\RekeningController@showedit')
            ->name('showeditrekening');
    Route::post('/edit-rekening/{id}', 'App\Http\Controllers\RekeningController@update')
            ->name('updaterekening');

    // Route::get('/pesanan', function () {return view('pesanan');});
    Route::get('/pesanan', [OrderController::class, "index"]);

    Route::get('/produk', 'App\Http\Controllers\ProductController@show')
            ->name('showproduk');

    Route::get('/edit-buku/{id}', [ProductController::class, "showedit"]);
    Route::post('/edit-buku/{id}', 'App\Http\Controllers\ProductController@update')
            ->name('updatebuku');
    Route::get('/delete-buku/{id}', [ProductController::class, "delete"]);

    Route::get('/tambah-buku', function () { return view('produk_tambah');});
    Route::post('/input-produk', 'App\Http\Controllers\ProductController@inputdetail')
            ->name('inputproduk');

    // Route::get('/penjualan', function () { return view('penjualan');});
    Route::get('/penjualan', [OrderController::class, "list_penjualan"]);
    Route::get('/confirm-status/{id}/{id2}', [OrderController::class, "penjual_confirm_order"]);
    // Route::get('/penghasilan', function () {return view('penghasilan');});
    Route::get('/penghasilan', [PencairanController::class, "index"]);
    Route::get('/ajukan', [PencairanController::class, "ajukan"]);
    // Route::get('/ajukan', function () {return view('penghasilan_info');});

});
