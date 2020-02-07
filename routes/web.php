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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin', 'AdminController@getLogin');

Route::get('/showData', 'QNAController@index');

Route::resource('qna', 'QNAController');

Route::get('/editData', 'QNAController@edit');

Route::get('/createData', 'QNAController@create');

Route::get('/login', 'AdminController@getLogin')->name('get.login');
Route::post('/login', 'AdminController@postLogin')->name('post.login');

Route::get('/upload', 'LainlainController@index');
Route::post('/upload/done', 'LainlainController@upload')->name('post.upload');

