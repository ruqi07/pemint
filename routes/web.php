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

// Route::group(['prefix' => 'api'], function () {
//     Route::get('mahasiswa', 'MahasiswaController@index');
//     Route::get('mahasiswa/{id}', 'MahasiswaController@show');
//     Route::post('mahasiswa', 'MahasiswaController@store');
//     Route::put('mahasiswa/{id}', 'MahasiswaController@update');
//     Route::delete('mahasiswa/{id}', 'MahasiswaController@delete');
// });