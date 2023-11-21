<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});
Route::group(['namespace' => 'App\Http\Controllers'], function() {
    // ROUTE FRONTEND
    Route::get('home', 'Frontend\BerandaController@index')->name('frontend.home');
    Route::get('tentang', 'Frontend\TentangController@index')->name('frontend.tentang');


    // SEMUA YANG ADA DI DALAM GROUP MIDDLEWARE ITU HARUS MELALUI PROSES LOGIN
    Route::group(['middleware' => ['auth']], function() {
        // ROUTE BACKEND
        Route::get('home', 'Backend\HomeController@index')->name('backend.home');

        // Route Kategori
        Route::get('kategori', 'Backend\KategoriController@index')->name('backend.kategori');
        Route::get('tambah-kategori', 'Backend\KategoriController@create')->name('backend.tambah.kategori');
        Route::post('/store-kategori', 'Backend\KategoriController@store')->name('store_kategori');
        Route::get('delete-kategori/{id}', 'Backend\KategoriController@destroy')->name('delete_kategori');
        Route::get('edit-kategori/{id}', 'Backend\KategoriController@edit')->name('edit_kategori');
        Route::post('/update-kategori/{id}', 'Backend\KategoriController@update')->name('update_kategori');

         // Route Peminjam
         Route::get('peminjam', 'Backend\PeminjamController@index')->name('backend.peminjam');
         Route::get('tambah-peminjam', 'Backend\PeminjamController@create')->name('backend.tambah.peminjam');
         Route::post('/store-peminjam', 'Backend\PeminjamController@store')->name('store_peminjam');
         Route::get('delete-peminjam/{id}', 'Backend\PeminjamController@destroy')->name('delete_peminjam');
         Route::get('edit-peminjam/{id}', 'Backend\PeminjamController@edit')->name('edit_peminjam');
         Route::post('/update-peminjam/{id}', 'Backend\PeminjamController@update')->name('update_peminjam');

        // Route Buku
        Route::get('buku', 'Backend\BukuController@index')->name('backend.buku');
    });
});

Auth::routes();