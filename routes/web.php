<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/admin','AdminController@adminindex');
Route::get('/admin-tablo','AdminController@tabloindex');
Route::get('news/{title}','GameController@newsView');
Route::get('/delete/{id}','AdminController@delete')->where(array('id'=>'[0-9]+'));
Route::get('/update/{id}', 'AdminController@updateView')->where(array('id' => '[0-9]+'));
Route::post('/update/{id}', 'AdminController@update')->where(array('id' => '[0-9]+'));


Route::get('/anasayfa','HomeController@userindex');

Route::get('/blog', 'BlogController@blogView');
Route::post('/blog', 'BlogController@blog');
Route::get('/news', 'BlogController@news');
Route::get('/text','BlogController@text');
Route::get('/admin-tablo','AdminController@textadd');
Route::get('/haber-ekle','GameController@newsCreateView');
Route::post('haber-kaydet','GameController@newsCreate')->name('news.create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
