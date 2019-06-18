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
Route::get('/hf', function () { return view('halamanform'); })->name('halaman.form');

//Route::get('/ht', 'halaman@tabel')->name('halaman.tabel');
//Route::get('/hf', 'halaman@form')->name('halaman.form');

//post data to mantra
Route::post('/postdata', 'proses@postData')->name('dt.postdata');

//datatable
Route::get('/dt', 'datatablegen@getDataTableV')->name('dt.tabel');
Route::get('/dtdd', 'datatablegen@getDataTabledd')->name('dtdd.tabel');
Route::get('/dtvd', 'datatablegen@getDataTablevd')->name('dtvd.tabel');
