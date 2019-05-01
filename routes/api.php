<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/message', 'MessageController@store');

Route::get('/messages', 'MessageController@index');

Route::post('/song', 'SongController@store');

Route::get('/songs', 'SongController@index');
