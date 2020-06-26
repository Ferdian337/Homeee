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

Route::get('/', 'PageController@home');
route::get('/about', 'PageController@about');
route::get('/contact', 'PageController@contact');

// route pengelola

route::get('/pemesanan', 'PengelolaController@pemesanan')->middleware('auth:pengelola');
route::get('/tambahht','PengelolaController@tambahht')->middleware('auth:pengelola');
route::post('/store', 'PengelolaController@store')->middleware('auth:pengelola');
route::get('/kelolaht', 'PengelolaController@kelolahomestay');
route::get('/kelolaht/ubahht/{id}', 'PengelolaController@ubah')->middleware('auth:pengelola');
route::get('/kelolaht/hapusht/{id}', 'PengelolaController@hapus')->middleware('auth:pengelola');
route::put('kelolaht/update/{id}', 'PengelolaController@update')->middleware('auth:pengelola');
route::get('/daftarpgl', 'PengelolaController@daftarpgl')->middleware('guest:pengelola');
route::get('/masukpgl', 'PengelolaController@masukpgl')->middleware('guest:pengelola')->name('masukpgl');
route::post('/storedaftarpgl', 'PengelolaController@storedaftarpgl')->middleware('guest:pengelola');
route::post('/storemasukpgl', 'PengelolaController@storemasukpgl')->middleware('guest:pengelola');
route::get('/keluarpgl', 'PengelolaController@keluarpgl')->middleware('auth:pengelola');
route::get('/rekeningpgl', 'PengelolaController@rekeningpgl')->middleware('auth:pengelola');
route::post('/storerekeningpgl', 'PengelolaController@storerekeningpgl')->middleware('auth:pengelola');
route::get('/hapusrekeningpgl/{id}', 'PengelolaController@hapusrekeningpgl')->middleware('auth:pengelola');
route::get('/kelolaht/detailht/{id}', 'PengelolaController@detailht')->middleware('auth:pengelola');

// route penyewa
route::get('/daftarpnw', 'PenyewaController@daftarpnw')->middleware('guest:penyewa');
route::get('/masukpnw', 'PenyewaController@masukpnw')->middleware('guest:penyewa')->name('masukpnw');
route::get('/cariht', 'PenyewaController@cariht');
route::get('/caritmn', 'PenyewaController@caritmn')->middleware('auth:penyewa');
route::post('/storedaftarpnw', 'PenyewaController@storedaftarpnw')->middleware('guest:penyewa');
route::post('/storemasukpnw', 'PenyewaController@storemasukpnw')->middleware('guest:penyewa');
route::get('/keluarpnw', 'PenyewaController@keluarpnw')->middleware('auth:penyewa');
route::get('/pesanht', 'PenyewaController@pesanht')->middleware('auth:penyewa');
route::get('/htdetail/{id}', 'PenyewaController@htdetail');
route::get('/isiformpesanawalht/{id}', 'PenyewaController@isiformpesanawalht')->middleware('auth:penyewa');
