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

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    // ROUTE FRONTEND
    Route::get('/', 'Frontend\BerandaController@index')->name('frontend.home');
    Route::get('tentang', 'Frontend\TentangController@index')->name('frontend.tentang');
    Route::get('kategoris', 'Frontend\KategoriController@index')->name('frontend.kategori');

    Route::get('show-kategori/{slug_kategori}', 'Frontend\KategoriController@show')->name('frontend.show.kategori');


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

        // Route Buku
        Route::get('buku', 'Backend\BukuController@index')->name('backend.buku');
    });
});

Auth::routes();