<?php

/*
 * Yoga Project
 *
 * Kay Wang
 * Luke Burtch
 * Phoebe Eng
 */

Route::get('/', function()
{
	return View::make('login');
});

Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('summary', array('uses' => 'EditingController@showSummary','as'=>'summary'));
Route::post('summary', array('uses' => 'EditingController@showSummary'));

Route::get('selection', array('uses' => 'EditingController@showSelect'));
Route::post('selection', array('uses' => 'EditingController@showSummary'));

Route::get('edit', array('uses' => 'EditingController@showEdit'));
Route::post('edit', array('uses' => 'EditingController@showEdit'));

Route::post('method19', array('uses' => 'EditingController@doMethod19'));

Route::post('method20', array('uses' => 'EditingController@doMethod20'));

Route::post('method3', array('uses' => 'EditingController@doMethod3'));

Route::post('method7', array('uses' => 'EditingController@doMethod7'));

Route::post('method25',array('uses' => 'EditingController@doMethod25'));

Route::post('method10', array('uses' => 'EditingController@doMethod10'));

Route::post('method23', array('uses' => 'EditingController@doMethod23'));

Route::post('method24', array('uses' => 'EditingController@doMethod24'));

Route::post('method26', array('uses' => 'EditingController@doMethod26'));

Route::post('method27', array('uses' => 'EditingController@doMethod27'));

Route::post('method1', array('uses' => 'EditingController@doMethod1'));

Route::get('preview', array('uses' => 'EditingController@showPreview'));
Route::post('preview', array('uses' => 'EditingController@showPreview'));

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