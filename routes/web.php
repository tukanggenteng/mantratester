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

Route::get('/ht', function () { return view('halamantabel'); });
Route::get('/hf', function () { return view('halamanform'); });

//Route::get('/ht', 'halaman@tabel')->name('halaman.tabel');
//Route::get('/hf', 'halaman@form')->name('halaman.form');
