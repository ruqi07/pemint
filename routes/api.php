<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group([
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::get('/mahasiswa', 'MahasiswaController@all');
Route::get('/mahasiswa/{id}', 'MahasiswaController@show');
Route::post('/mahasiswa', 'MahasiswaController@store');
Route::put('/mahasiswa/{id}', 'MahasiswaController@update');
Route::delete('/mahasiswa/{id}', 'MahasiswaController@destroy');
