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


//maintenance route
Route::resource('/maintenance/animal', 'AnimalController');

Route::resource('/maintenance/breed', 'BreedController');

Route::resource('/maintenance/medicalservice', 'MedicalServiceController');

Route::resource('/maintenance/groomservice', 'GroomServiceController');


//login route
Route::get('account/login', 'Auth\AuthController@getLogin');


//registration route
Route::get('account/register', 'Auth\AuthController@getRegister');