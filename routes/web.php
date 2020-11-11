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

Route::get('/', 'HomeController@index');
Route::get('/details/{id}', 'HomeController@show');
Route::get('/drama', 'DramaController@index');
Route::get('/kids', 'KidsController@index');
Route::get('/tvshow', 'TvShowController@index');
