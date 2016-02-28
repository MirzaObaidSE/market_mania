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
Route::get('signin','AuthController@redirectToProvider');
Route::get('callback','AuthController@handleProviderCallback');
Route::get('logout','AuthController@logout');
Route::get('/facebook','FacebookController@facebook');
Route::get('/callback','FacebookController@callback');

