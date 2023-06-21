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

Route::get('/formsatu', 'PageController@formsatu');
Route::get('/formsatu/simpan', 'PageController@simpan');

Route::get('/formdua', 'PageController@formdua');
Route::post('formdua/ceksimpan','PageController@ceksimpan');
Route::get('/','PageController@desc');
Route::get('/tambahan', 'PageController@tambahan');