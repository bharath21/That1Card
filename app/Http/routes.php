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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

	
Route::get('/dashboard','PagesController@home');
Route::get('/register/manufacturer','PagesController@registerManufacturer');
Route::post('/register/manufacturer','FormController@registerManufacturer');
Route::get('/edit/manufacturer','PagesController@editManufacturer');
Route::post('/find/manufacturer','FormController@findManufacturer');
Route::post('/edit/manufacturer','FormController@editManufacturer');

Route::get('/register/retailer','PagesController@registerRetailer');
Route::post('/register/retailer','FormController@registerRetailer');
Route::get('/edit/retailer','PagesController@editRetailer');
Route::post('/find/retailer','FormController@findRetailer');
Route::post('/edit/retailer','FormController@editRetailer');
Route::post('/sample','FormController@f');

Route::get('/register/procurement','PagesController@registerProcurement');
Route::post('/register/procurement','FormController@registerProcurement');
Route::get('/edit/procurement','PagesController@editProcurement');
Route::post('/edit/procurement','FormController@editProcurement');
Route::post('/find/procurement','FormController@findProcurement');
Route::get('/dashboard/register','PagesController@registerDashboard');
Route::get('/dashboard/edit','PagesController@editDashboard');

Route::get('/register/sale','PagesController@registerSale');
Route::post('/register/sale','FormController@registerSale');
Route::get('/edit/sale','PagesController@editSale');
Route::post('/edit/sale','FormController@editSale');
Route::post('/find/sale','FormController@findSale');

Route::get('/register/card','PagesController@registerCard');
Route::post('/register/card','FormController@registerCard');
Route::get('/edit/card','PagesController@editCard');
Route::post('/edit/card','FormController@editCard');
Route::post('/find/card','FormController@findCard');

	
Route::get('/home', 'HomeController@index');
