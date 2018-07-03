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

Route::get('/', function(){
    return view('home');
});

Route::group(['prefix' => 'pasien'], function(){
    Route::get('/', 'PasienController@index')->name('pasien.index');
    Route::get('/data', 'PasienController@dataPasien')->name('pasien.data');
    Route::put('/update/{id}', 'PasienController@update')->name('pasien.update');
    Route::post('/store', 'PasienController@store')->name('pasien.store');
    Route::delete('/destroy/{id}', 'PasienController@destroy')->name('pasien.destroy');
});
