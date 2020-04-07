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
//Homepage
Route::get('/', function () {
    return view('content.welcome');
});

//News & Articles
Route::post('/news', 'ArticlesController@store');
Route::get('/news', 'ArticlesController@index');
Route::get('/news/create', 'ArticlesController@create');
Route::get('/news/{id}/edit', 'ArticlesController@edit');
Route::put('/news/{id}','ArticlesController@update');
Route::delete('/news/{id}','ArticlesController@destroy');
Route::get('/news/{id}', 'ArticlesController@show');


