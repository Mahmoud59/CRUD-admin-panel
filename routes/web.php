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

Route::get('/register', 'AuthController@index');
Route::post('/registeration', 'AuthController@registeration');

Route::get('/login', 'AuthController@login');
Route::post('/authenticate', 'AuthController@authenticate');

 Route::group(['middleware' => 'client'], function() {
 	Route::resource('client','ClientController');
 	Route::resource('service','ServiceController');
 	Route::get('/logout', 'AuthController@logout');
});