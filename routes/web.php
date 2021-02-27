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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'deposit'], function () {
    Route::get('/index', 'SaldoController@index')->name('deposit');
    Route::get('/create', 'SaldoController@create')->name('deposit.create');
    Route::post('/tambah-data', 'SaldoController@store')->name('deposit.store');
    Route::get('/tambah-saldo/{id}', 'Saldo\TambahSaldoController@create')->name('tambahsaldo');
    Route::get('/kurang-saldo/{id}', 'Saldo\KurangSaldoController@create')->name('kurang-saldo');
    Route::patch('/update/{id}', 'Saldo\TambahSaldoController@update')->name('saldo.update');
    Route::patch('/kurangsaldo/{id}', 'Saldo\KurangSaldoController@update')->name('kurang-saldo.update');
});