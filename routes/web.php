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


Route::get('/master', function(){
    return view('master.index');
} );

Route::get('/', function(){
    return view('home.index');
} );


Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan tabel berisi data pertanyaan-pertanyaan
Route::get('/pertanyaan/create', 'PertanyaanController@create'); //menampilkan form untuk membuat pertanyaan baru
Route::post('/pertanyaan', 'PertanyaanController@store'); //menyimpan data baru ke tabel pertanyaan
/*
Route::get('/jawaban/{id}', 'JawabanController@index');
Route::pos('/jawaban/{id}', 'JawabanController@store');
*/
