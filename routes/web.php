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

Route::get('/', "PaspirtukaiController@index");

Route::resource('paspirtukai', 'PaPaspirtukaiController');
Route::resource('elpaspirtukai', 'ElPaspirtukaiController');
Route::resource('krepselis', 'CartController');

