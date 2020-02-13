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

Route::get('/', 'QNAController@show');

Auth::routes();

Route::resource('qna', 'QNAController')->middleware('auth');

Route::get('/showData', 'QNAController@index')->middleware('auth');

Route::get('/editData', 'QNAController@edit')->middleware('auth');

Route::get('/createData', 'QNAController@create')->middleware('auth');

Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('get.login');
Route::post('/login', 'AuthController@postLogin')->middleware('guest')->name('post.login');
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('/upload', 'QNAController@uploadfile')->middleware('auth');

Route::get('/showDataInfo/{jenis}', 'QNAController@process')->middleware('auth')->name('get.dataInfo');
