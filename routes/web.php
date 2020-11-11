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

Auth::routes();
//guest

Route::get('/', 'PagesController@index')->middleware('web');
Route::get('/home', 'PagesController@login')->name('halamanLogin')->middleware('web');
Route::get('/katalog', 'PagesController@katalog')->middleware('web');
Route::get('/daftar', 'PagesController@daftar')->middleware('web');

Route::post('/kirimdata', 'LoginController@login')->name('login');
Route::get('/keluar', 'LoginController@keluar');
Route::post('/register', 'LoginController@postRegister')->name('register');
Route::get('/register', 'LoginController@getRegister');

//pembeli
Route::get('/pembeli', 'PagesController@pembeli')->name('pembeli')->middleware('auth:pembeli');
Route::get('/katalogPembeli', 'PagesController@katalogPembeli')->name('katalogPembeli')->middleware('auth:pembeli');

//penjual
Route::get('/penjual', 'PagesController@penjual')->middleware('auth:penjual')->name('penjual');
Route::get('/cekharga', 'PagesController@cekharga')->middleware('auth:penjual');
Route::get('/katalogPenjual', 'PagesController@katalogPenjual')->middleware('auth:penjual');
Route::get('/tambahkatalogAdmin', 'PagesController@tambahkatalogAdmin')->middleware('auth:penjual')->name('tambahKatalog');
Route::get('/tambahKatalog', 'PagesController@tambahKatalog')->middleware('auth:penjual');
Route::get('/tambahPCekHarga', 'PagesController@tambahCekHarga')->middleware('auth:penjual')->name('tambahCekHarga');