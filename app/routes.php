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

Route::get('/', function()
{
	return View::make('login');
});

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

Route::get('dashboard', array('uses' => 'HomeController@showDashboard'));
// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('createnew', array('uses' => 'HomeController@showCreateNew'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('selector', array('uses' => 'HomeController@showSelector'));
Route::get('dashboard', array('uses' => 'HomeController@showDashboard'));

Route::get('selection', array('uses' => 'EditingController@showSelect'));
Route::get('temp', array('uses' => 'EditingController@showTemp'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('summary', array('uses' => 'EditingController@showSummary'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('dashboard',array('uses'=> 'HomeController@loadDashboard'));
Route::get('/', function()
{
	return View::make('login');
}
);
