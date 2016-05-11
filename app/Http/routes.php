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
Route::get('home', function () {

	if(Auth::guest()){
		return Redirect::to('auth/login');
	}
	else{

        if(Auth::user()->type == 'admin'){
           return View('admin.index');
        } else {

            return Redirect::to('customer/home');
        }
    }
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//
Route::get('signin','AuthController@redirectToProvider');
Route::get('callback','AuthController@handleProviderCallback');
Route::get('logout','AuthController@logout');
Route::get('facebook','FacebookController@facebook');
Route::get('callback_facebook','FacebookController@callback');

Route::get('user_hello', function(){
    dd("admin is here");
});

Route::get('get_twitter_users',[
    'as' => 'get_twitter_users',
    'uses' => 'SocialController@getTwitter'
]);
Route::get('get_facebook_users',[
    'as' => 'get_facebook_users',
    'uses' => 'Facebook_User@getFacebook'
]);
Route::get('get_instagram_users',[
    'as' => 'get_instagram_users',
    'uses' => 'InstagramController@getInstagram'
]);

Route::get('/auth/instagram/callback',[
    'as' => 'instagram_callback',
    'uses' => 'InstagramController@instagramCallback'
]);

Route::get('/instagram_users',[
    'as' => 'instagram_users',
    'uses' => 'InstagramController@instagramUsers'
]);

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function(){
    Route::get('hello', function(){
        dd("Admin is here!!!");
    });
    Route::get('alluser',[
        'as' => 'alluser',
        'uses' => 'AdminController@getuserlist'
    ]);
     Route::get('add_user',[
        'as' => 'add_user',
        'uses' => 'AdminController@create'
    ]);
     Route::get('home',[
        'as' => 'home',
        'uses'=> 'AdminController@Dashboard'
    ]);
      Route::post('createuser',[
        'as' => 'createuser',
        'uses'=> 'AdminController@store'
    ]);
      Route::get('edituser/{id}',[
        'as'=> 'edit_user',
        'uses' => 'AdminController@edit'
    ]);

    Route::post('updateuser/{id}',[
        'as'=> 'update_user',
        'uses' => 'AdminController@update'
    ]);
    Route::get('delete_euser/{id}',[
        'as'=> 'delete_user',
        'uses' => 'AdminController@delete'
    ]);

});


Route::group(['middleware' => ['auth', 'customer'], 'prefix' => 'customer'], function(){
    Route::get('home',[
        'as' => 'user_home',
        'uses' => 'UserController@index'
    ]);
    Route::get('profile',[
        'as' => 'user_profile',
        'uses' => 'UserController@showprofile'
    ]);
});