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
    return view('welcome');
});

Route::get('facebook/login', 'FacebookController@login');
Route::get('facebook/callback', 'FacebookController@callback');
Route::get('facebook/zly', 'FacebookController@zly');

Route::get('google/login', 'FacebookController@googlelogin');
Route::get('google/callback', 'FacebookController@googlecallback');

Route::auth();

Route::get('/home', [
	'as'=>'home', 
	'uses'=>'HomeController@index',
	'middleware' => 'isAdmin'
	]);
