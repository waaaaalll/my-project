<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\berhasilController;
use App\Http\Controllers\KonfirmasiPembelianController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\QuantityController;
use App\Http\Controllers\BerhasilBeliController;
use App\Http\Controllers\RiwayatPembelianController;
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
    return view('welcome');
});

Route::resource('kuantitas', QuantityController::class);
Route::resource('barang', BarangController::class);
// Route::resource('pembelian', PembelianController::class);

Route::get('/dashboard', function (){
    return view('back.dashboard');
});



Route::get('/home-page', [PenjualanController::class, 'index']);



// Route::get('/pembelian', [PembelianController::class, 'index']);

Route::get('/proses-transaksi/{id}', [PembelianController::class, 'index'])->name('pembelian.index');
// Route::post('/pembelian/beli/{id}', 'PembelianController@beli')-use App\Http\Controllers\PembelianController;

Route::post('/proses-transaksi/beli/{id}', [PembelianController::class, 'beli'])->name('pembelian.beli');
// Route::get('/pembelian-berhasil', [berhasilController::class, 'index']);

Route::get('/transaksi-berhasil', [BerhasilBeliController::class, 'index'])->name('berhasil-beli.index');
Route::get('/riwayat-pembelian', [RiwayatPembelianController::class, 'index'])->name('riwayat-pembelian.index');