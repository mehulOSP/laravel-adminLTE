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

// admin panel
Route::get('signup', 'UserController@signupIndex');
Route::get('admin', 'UserController@index');
Route::get('dashboard', 'DashboardController@index');


// Testing API
Route::get('user', 'UserController@users');

// Frontend
Route::get('/', function(){
	return view('welcome');
});
