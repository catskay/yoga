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

Route::get('selector', array('uses' => 'EditingController@showSelector','as'=>'selector'));


Route::get('selection', array('uses' => 'EditingController@showSelect'));
Route::get('selection2', array('uses' => 'EditingController@showSelect2'));
Route::post('selection2', array('uses' => 'EditingController@showSelector'));

Route::get('edit', array('uses' => 'EditingController@showEdit'));
Route::post('edit', array('uses' => 'EditingController@showEdit'));


Route::get('temp', array('uses' => 'EditingController@showTemp'));

Route::post('selector', array('uses' => 'EditingController@showSelector'));


Route::post('method19', array('uses' => 'EditingController@doMethod19'));

Route::post('method20', array('uses' => 'EditingController@doMethod20'));

Route::post('method2', array('uses' => 'EditingController@doMethod2'));

Route::post('method3', array('uses' => 'EditingController@doMethod3'));

Route::post('method7', array('uses' => 'EditingController@doMethod7'));

Route::post('method25',array('uses' => 'EditingController@doMethod25'));

Route::post('method10', array('uses' => 'EditingController@doMethod10'));

Route::post('method23', array('uses' => 'EditingController@doMethod23'));

Route::post('method24', array('uses' => 'EditingController@doMethod24'));

Route::post('method26', array('uses' => 'EditingController@doMethod26'));

Route::post('method27', array('uses' => 'EditingController@doMethod27'));

Route::get('view', array('uses' => 'EditingController@showView'));

Route::get('preview', array('uses' => 'EditingController@showPreview'));
Route::post('preview', array('uses' => 'EditingController@showPreview'));

// route to process the form
Route::get('summary', array('uses' => 'EditingController@showSummary'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('dashboard',array('uses'=> 'HomeController@loadDashboard'));
Route::post('dashboard',array('uses'=> 'HomeController@loadDashboard'));

Route::get('/', function()
{
	return View::make('login');
}
);

Route::get('pdf', function(){
    Fpdf::AddPage();
    Fpdf::SetFont('Arial','B',16);
    Fpdf::Cell(40,10,'Hello World!');
    Fpdf::Output();
    exit;

});