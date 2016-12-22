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


/*ROUTES Guest*/
Route::get('/login', 'Auth\AuthController@showLogin');




/*ROUTES Authenticated*/

Route::get('/', ['middleware' => 'auth','uses' => 'UserController@showAdmin']);
Route::get('/logout', 'Auth\AuthController@logout');


/* RESTful Resource Controllers */

Route::resource('auth', 'Auth\AuthController');

Route::group(['middleware' => 'auth'], function()
{
    Route::resource('facilities', 'FacilitiesController');
	Route::resource('property', 'PropertyController');
	Route::resource('state', 'StateController');
});

