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
Route::view('/', 'welcome');
Route::view('cek-kecanduan', 'kecanduan.index');
Route::view('cek-tidak-kecanduan', 'tidak-kecanduan.index');

Route::post('pilih-kondisi', 'CheckController@Index')->name('check.kondisi');

Route::post('check.kecanduan', 'CheckController@CekKondisiKecanduan')->name('check.kecanduan');
Route::post('check.tidak-kecanduan', 'CheckController@CekKondisiTidakKecanduan')->name('check.tidak-kecanduan');
