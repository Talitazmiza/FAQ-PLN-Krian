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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('qna', 'QNAController');

Route::get('/admin', 'AdminController@getLogin');

Route::get('/showData', 'QNAController@index');

Route::get('/editData', 'QNAController@edit');

Route::get('/createData', 'QNAController@create');

Route::get('/login', 'AuthController@getLogin')->name('get.login');
Route::post('/login', 'AuthController@postLogin')->name('post.login');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::get('/upload', 'QNAController@uploadfile');

Route::get('/showDataInfo/{jenis}', 'QNAController@process')->name('get.dataInfo');
