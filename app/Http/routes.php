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

// Default routes
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/category', 'CategoryController@index');
Route::get('/item', 'ItemController@index');
Route::get('/login', 'LoginController@index');
Route::get('/registration', 'RegistrationController@index');
Route::get('/cart', 'CartController@index');
Route::get('/chat', 'ChatController@index');
Route::get('/checkout', 'CheckoutController@index');
Route::get('/profile', 'ProfileController@index');
