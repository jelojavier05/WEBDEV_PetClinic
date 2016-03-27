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

//main
Route::resource('/main/homepage', 'HomeController');

Route::resource('/main/offeredservices', 'OfferedServicesController');

//maintenance route
Route::get('/maintenance/animal', 'AnimalController@index');

Route::post('/maintenance/animal/create', 'AnimalController@store');

Route::post('/maintenance/animal/update', 'AnimalController@update');

Route::post('/maintenance/animal/destroy', 'AnimalController@destroy');

Route::get('/maintenance/medicalservice', 'MedicalServiceController@index');

Route::post('/maintenance/medicalservice/create', 'MedicalServiceController@store');

Route::post('/maintenance/medicalservice/update', 'MedicalServiceController@update');

Route::post('/maintenance/medicalservice/destroy', 'MedicalServiceController@destroy');

Route::get('/maintenance/groomservice', 'GroomServiceController@index');

Route::post('/maintenance/groomservice/create', 'GroomServiceController@store');

Route::post('/maintenance/groomservice/update', 'GroomServiceController@update');

Route::post('/maintenance/groomservice/destroy', 'GroomServiceController@destroy');

Route::get('/maintenance/breed', 'BreedController@index');

Route::post('/maintenance/breed/create', 'BreedController@store');

Route::post('/maintenance/breed/update', 'BreedController@update');

Route::post('/maintenance/breed/destroy', 'BreedController@destroy');

Route::get('/maintenance/schedule', 'ScheduleController@index');

Route::post('/maintenance/schedule/create', 'ScheduleController@store');

Route::post('/maintenance/schedule/update', 'ScheduleController@update');

Route::post('/maintenance/schedule/destroy', 'ScheduleController@destroy');

Route::resource('/maintenance/appointments', 'AppointmentsController');

//login route
Route::get('account/login', 'Auth\AuthController@getLogin');


//registration route
Route::get('account/register', 'Auth\AuthController@getRegister');

//mga nagagawa ng client
Route::resource('client/clientmain', 'ClientMainController');

Route::resource('client/viewpets', 'ViewPetsController');

Route::resource('client/addpet', 'AddPetController');

Route::resource('client/inquire', 'InquireController');

