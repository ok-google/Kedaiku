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

Route::get('/penjualan/', 'Penjualan@index')->name('penjualan.index');
Route::get('/bahan/', 'BahanController@index')->name('bahan.index');
Route::get('/Kas/', 'KasController@index')->name('Kas.index');
