<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('app');
});

Route::post('movie/{movie}/watched', ['uses' => 'MovieController@watched', 'as' => 'movie.watched']);

Route::resource('movie', 'MovieController', ['only' => ['index', 'store', 'destroy']]);
