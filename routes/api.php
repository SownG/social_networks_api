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

Route::group(['namespace' => 'Api', 'prefix' => 'user'], function () {
    Route::get('getUsers', 'UserController@getUsers');
    Route::post('login', 'AuthController@login');
    Route::post('signUp', 'AuthController@signUp');
    Route::post('login/facebook', 'AuthController@facebook');
    Route::post('login/twitter', 'AuthController@twitter');
    Route::post('login/google', 'AuthController@google');
});
