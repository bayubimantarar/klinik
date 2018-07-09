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
    Route::get('/', [
        'uses' => 'PasienController@index',
        'as' => 'pasien.index'
    ]);

    Route::get('/data', [
        'uses' => 'PasienController@dataPasien',
        'as' => 'pasien.data'
    ]);

    Route::get('/create', [
        'uses' => 'PasienController@create',
        'as' => 'pasien.create'
    ]);

    Route::get('/edit/{id}', [
        'uses' => 'PasienController@edit',
        'as' => 'pasien.edit'
    ]);

    Route::put('/update/{id}', [
        'uses' => 'PasienController@update',
        'as' => 'pasien.update'
    ]);

    Route::post('/store', [
        'uses' => 'PasienController@store',
        'as' => 'pasien.store'
    ]);

    Route::delete('/destroy/{id}', [
        'uses' => 'PasienController@destroy',
        'as' => 'pasien.destroy'
    ]);
});

Route::group(['prefix' => 'dokter'], function(){
    Route::get('/', [
        'uses' => 'DokterController@index',
        'as' => 'dokter.index'
    ]);

    Route::get('/create', [
        'uses' => 'DokterController@create',
        'as' => 'dokter.create'
    ]);

    Route::post('/store', [
        'uses' => 'DokterController@store',
        'as' => 'dokter.store'
    ]);

    Route::put('/update/{id}', [
        'uses' => 'DokterController@update',
        'as' => 'dokter.update'
    ]);

    Route::delete('/destroy/{id}', [
        'uses' => 'DokterController@destroy',
        'as' => 'dokter.destroy'
    ]);
});

Route::group(['prefix' => 'pendaftaran'], function(){
    Route::get('/', [
        'uses' => 'PendaftaranController@index',
        'as' => 'pendaftaran.index'
    ]);
    Route::get('/create', [
        'uses' => 'PendaftaranController@create',
        'as' => 'pendaftaran.create'
    ]);
});
