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
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // ROUTE FRONTEND
    Route::get('home', 'Frontend\BerandaController@index')->name('frontend.home');
    // Route::get('tentang', 'Frontend\TentangController@index')->name('frontend.tentang');


    // SEMUA YANG ADA DI DALAM GROUP MIDDLEWARE ITU HARUS MELALUI PROSES LOGIN
    Route::group(['middleware' => ['auth']], function () {
        //Users
        Route::get('users', 'Backend\UserBackendController@index')->name('backend-index-user');
        Route::get('tambah_user', 'Backend\UserBackendController@create')->name('backend-create-user');
        Route::POST('store_user', 'Backend\UserBackendController@store')->name('backend-store-user');
        Route::get('/edit_user/{id}', 'Backend\UserBackendController@edit')->name('backend-edit-user');
        Route::post('/update_user/{id}', 'Backend\UserBackendController@update')->name('backend-update-user');
        Route::get('/delete_user/{id}', 'Backend\UserBackendController@destroy')->name('backend-delete-user');

        // ROUTE BACKEND
        Route::get('home', 'Backend\HomeController@index')->name('backend.home');

        // Route Kategori
        // Route::get('kategori', 'Backend\KategoriController@index')->name('backend.kategori');

        // Route Buku
        Route::get('buku', 'Backend\BukuController@index')->name('backend.buku');
        Route::get('create_buku', 'Backend\BukuController@create')->name('backend-buku-create');
        Route::get('store_buku', 'Backend\BukuController@store')->name('backend-buku-store');
    });
});

Auth::routes();
