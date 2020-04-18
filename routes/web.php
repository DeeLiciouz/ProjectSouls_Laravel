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
// Auth
Auth::routes();


//Homepage
Route::get('/', function () {
    return view('content.welcome');
});


//News & Articles
Route::post('/news', 'ArticlesController@store');
Route::put('/news/{article}', 'ArticlesController@update');
Route::delete('/news/{article}', 'ArticlesController@destroy');
Route::get('/news', 'ArticlesController@index')->name('article.index');
Route::get('/news/create', 'ArticlesController@create')->name('article.create');
Route::get('/news/{article}/edit', 'ArticlesController@edit')->name('article.edit')->middleware('can:update,article');
Route::get('/news/{article}', 'ArticlesController@show')->name('article.show');
