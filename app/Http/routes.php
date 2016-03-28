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

Route::get('/main/homepage', 'HomeController@index');

Route::resource('/main/offeredservices', 'OfferedServicesController');

Route::get('/client/schedule', 'ClientScheduleController@index');

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

Route::get('/maintenance/appointments', 'AppointmentsController@index');

Route::post('/maintenance/schedule/approved', 'AppointmentsController@approved');

Route::post('/maintenance/schedule/declined', 'AppointmentsController@declined');

Route::post('/maintenance/schedule/destroy', 'ScheduleController@destroy');

//registration route
Route::get('/account/register', 'RegistrationController@index');

Route::post('/account/register/create', 'RegistrationController@store');

//login route
Route::get('/account/login', 'LoginController@index');

Route::post('/account/login/create', 'LoginController@postLogin');

Route::resource('client/clientservices', 'ClientServicesController');

Route::resource('client/editdetails', 'EditDetailsController');

//mga nagagawa ng client
Route::get('/client/clientmain', 'ClientMainController@index');


//edit details
Route::get('/client/editdetails', 'EditDetailsController@index');

Route::post('/client/editdetails/update', 'EditDetailsController@update');


//changepassword
Route::get('/client/changepassword', 'ChangePasswordController@index');

Route::post('/client/changepassword/update', 'ChangePasswordController@update');



Route::get('/client/viewpets', 'ViewPetsController@index');
// add pet controller
Route::get('/client/addpet', 'AddPetController@index');

Route::get('/client/addpet/getBreed', 'BreedController@getBreed');

Route::post('/client/addpet/create', 'AddPetController@store');


//
Route::get('/client/inquire', 'InquireController@index');

Route::post('/client/inquire/create', 'InquireController@store');

Route::get('/client/logout', 'ClientMainController@destroy');

