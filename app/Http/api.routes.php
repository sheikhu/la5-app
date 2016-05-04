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

Route::get('auth', 'Auth\ApiAuthController@authenticate');

Route::group(['namespace' => 'Api'/*, 'middleware' => 'api.auth'*/], function() {
    Route::resource('users', UsersController::class);
    Route::resource('members', MembersController::class);
});


