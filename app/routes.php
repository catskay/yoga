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

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('createnew', array('uses' => 'HomeController@showCreateNew'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('selector', array('uses' => 'EditingController@showSelector', 'as' => 'selector'));


Route::post('selector', array('uses' => 'EditingController@showSelector', 'as' => 'selector'));

Route::get('selection', array('uses' => 'EditingController@showSelect'));
Route::get('selection2', array('uses' => 'EditingController@showSelect2'));

Route::get('temp', array('uses' => 'EditingController@showTemp'));

Route::post('edit', array('uses' => 'EditingController@showEdit'));

Route::get('edit', function()
{
	return View::make('edit');
});

Route::get('method19', array('uses' => 'EditingController@showMethod19'));
Route::post('method19', array('uses' => 'EditingController@doMethod19'));

Route::get('method20', array('uses' => 'EditingController@showMethod20'));
Route::post('method20', array('uses' => 'EditingController@doMethod20'));

Route::get('method7', array('uses' => 'EditingController@showMethod7'));
Route::post('method7', array('uses' => 'EditingController@doMethod7'));

Route::get('method25', array('uses' => 'EditingController@showMethod25'));
Route::post('method25', array('uses' => 'EditingController@doMethod25'));

Route::post('selector', array('uses' => 'EditingController@toEdit'));

Route::get('view', array('uses' => 'EditingController@showView'));

Route::get('preview', array('uses' => 'EditingController@showPreview'));

// route to process the form
Route::get('summary', array('uses' => 'EditingController@showSummary'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('dashboard',array('uses'=> 'HomeController@loadDashboard'));
Route::get('/', function()
{
	return View::make('login');
}
);
