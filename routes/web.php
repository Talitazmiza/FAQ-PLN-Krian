<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/search', 'QNAController@search')->middleware('auth')->name('search.data');
Route::get('/admin', 'AuthController@getLogin')->middleware('guest')->name('get.login');
Route::post('/login', 'AuthController@postLogin')->middleware('guest')->name('post.login');
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');
Route::get('/upload', 'QNAController@uploadfile')->middleware('auth')->name('upload');
Route::get('/showDataInfo/{jenis}', 'QNAController@process')->middleware('auth')->name('get.dataInfo');

Route::get('/imageUpload', 'UploadImageController@index')->name('get.imageUpload');
Route::post('/imageUpload', 'UploadImageController@upload')->name('post.imageUpload');
Route::delete('/imageUpload/{id}', 'UploadImageController@destroy')->name('delete.imageUpload');

