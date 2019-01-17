<?php

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

Route::get('/', 'Penjualan@dashboard')->name('penjualan.dashboard');

Route::get('/master/bahan/', 'BahanController@index')->name('bahan.index');
Route::post('/master/bahan/store', 'BahanController@store')->name('bahan.store');
Route::get('/master/bahan/getAll', 'BahanController@getAll')->name('bahan.all');
Route::post('/master/bahan/update', 'BahanController@update')->name('bahan.update');
Route::post('/master/bahan/delete', 'BahanController@delete')->name('bahan.delete');


Route::get('/master/Kas/', 'KasController@index')->name('Kas.index');
Route::post('/master/kas/store', 'KasController@store')->name('kas.store');
Route::get('/master/kas/getAll', 'KasController@getAll')->name('kas.all');
Route::post('/master/kas/update', 'KasController@update')->name('kas.update');
Route::post('/master/kas/delete', 'KasController@delete')->name('kas.delete');


Route::get('/master/produk/', 'ProdukController@index')->name('produk.index');
Route::post('/master/produk/store', 'ProdukController@store')->name('produk.store');
Route::get('/master/produk/getAll', 'ProdukController@getAll')->name('produk.all');
Route::post('/master/produk/update', 'ProdukController@update')->name('produk.update');
Route::post('/master/produk/delete', 'ProdukController@delete')->name('produk.delete');


Route::get('/transaksi/pembelian/', 'PembelianController@index')->name('pembelian.index');
Route::get('/transaksi/penjualan/', 'PenjualanController@index')->name('penjualan.index');
Route::get('/transaksi/penjualan/getAll', 'PenjualanController@getAll')->name('penjualan.getAll');
Route::post('/transaksi/penjualan/store', 'PenjualanController@store')->name('penjualan.store');

Route::get('/transaksi/mutasi kas/', 'MutasiKasController@index')->name('mutasi.index');
Route::get('/transaksi/pemasukan/', 'pemasukan@index')->name('pemasukan.index');
Route::get('/transaksi/pengeluaran/', 'pengeluaran@index')->name('pengeluaran.index');

Route::get('/laporan/laba rugi', 'LabaRugiController@index')->name('labarugi.index');
Route::get('/laporan/grafik', 'GrafikController@index')->name('grafik.index');
