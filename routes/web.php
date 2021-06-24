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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'homeController@get_home');
Route::get('/kayit', 'kayitController@get_kayit');
Route::get('/hesaplama', 'hesaplamaController@get_hesaplama');
Route::get('/hakkımızda', 'hakkımızdaController@get_hakkımızda');
Route::get('/iletisim', 'iletisimController@get_iletisim');
Route::get('/yardım', 'yardımController@get_yardım');
Route::get('/restart', 'restartController@get_restart');
Route::get('/giris', 'girisController@get_giris');
Route::get('/antrenman', 'antrenmanController@get_antrenman');
