<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Api'], function () {
    Route::get('user', 'AuthController@getUser');
    Route::post('user/login', 'AuthController@login');
    Route::post('user/login/facebook', 'AuthController@facebook');
    Route::post('user/login/twitter', 'AuthController@twitter');
    Route::post('user/login/google', 'AuthController@google');
});