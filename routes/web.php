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

        // Route Buku
        Route::get('buku', 'Backend\BukuController@index')->name('backend.buku');
        Route::get('create_buku', 'Backend\BukuController@create')->name('backend.create_buku');
        Route::get('update_buku', 'Backend\BukuController@update')->name('backend.update_buku');

        // Route Penulis
        Route::get('penulis', 'Backend\PenulisController@index')->name('backend.penulis');
        Route::get('create_penulis', 'Backend\PenulisController@create')->name('backend.create_penulis');
        Route::post('store_penulis', 'Backend\PenulisController@store')->name('backend.store_penulis');
        Route::get('edit_penulis/{id}', 'Backend\PenulisController@edit')->name('backend.edit_penulis');
        Route::get('delete_penulis/{id}', 'Backend\PenulisController@destroy')->name('backend.delete_penulis');
        Route::post('update_penulis/{id}', 'Backend\PenulisController@update')->name('backend.update_penulis');
        Route::get('show_penulis/{id}', 'Backend\PenulisController@show')->name('backend.show_penulis');

    });
});

Auth::routes();