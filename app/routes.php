<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('dashboard', array('uses' => 'HomeController@showDashboard'));

Route::get('createnew', array('uses' => 'HomeController@showCreateNew'));

Route::get('selector', array('uses' => 'HomeController@showSelector'));

Route::get('/', function()
{
	return View::make('login');
}
);
