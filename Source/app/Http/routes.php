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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('admin', 'WelcomeController@admin');

Route::get('layouts', 'WelcomeController@layouts');

Route::get('phonebook', 'WelcomeController@phonebook');

Route::get('phonebook-single', 'WelcomeController@phonebookSingle');

Route::get('phonebook-dept', 'WelcomeController@phonebookDept');

Route::get('download', 'WelcomeController@download');

Route::get('download-single', 'WelcomeController@downloadSingle');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
