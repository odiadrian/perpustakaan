<?php

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
    Route::get('/tentang', 'Frontend\TentangController@index')->name('frontend.tentang');
    Route::get('/kontak', 'Frontend\kontakController@index')->name('frontend.kontak');


    // SEMUA YANG ADA DI DALAM GROUP MIDDLEWARE ITU HARUS MELALUI PROSES LOGIN
    // Route::group(['middleware' => ['auth']], function() {
        // ROUTE BACKEND
        Route::get('home', 'Backend\HomeController@index')->name('backend.home');

        Route::get('kategori', 'Backend\KategoriController@index')->name('backend.kategori');
    // });
});
