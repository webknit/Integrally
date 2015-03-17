<?php
use App\Http\Controllers\Resources;
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

/*
|--------------------------------------------------------------------------
| Phonebook Routes
|--------------------------------------------------------------------------
*/

Route::get('profiles', 'Profiles\ProfileController@index');

Route::get('profiles/{slug}', 'Profiles\ProfileController@profile');

Route::get('profiles/group/{group}', 'Profiles\ProfileController@group');

Route::get('profiles/{slug}/edit', 'Profiles\ProfileController@profileEdit');

/*
|--------------------------------------------------------------------------
| Resources Routes
|--------------------------------------------------------------------------
*/

Route::get('resources', 'Resources\ResourceController@index');

Route::get('resources/{slug}', 'Resources\ResourceController@resource');

/*
|--------------------------------------------------------------------------
| Helper/Uncategorised Routes
|--------------------------------------------------------------------------
*/

Route::get('admin', 'WelcomeController@admin');

Route::get('login', 'WelcomeController@login');

Route::get('layouts', 'WelcomeController@layouts');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
