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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::resource('usage', 'PenggunaanController');
    Route::resource('fare', 'TarifController');
    Route::resource('bill', 'TagihanController');
    Route::get('bill/generate/{gen}', 'TagihanController@generate')->name('bill.generate');
});