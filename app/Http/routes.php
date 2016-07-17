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
Route::get('/home', 'HomeController@index');
