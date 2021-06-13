<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// start page route 
Route::get('/', 'HomePageController@index')->name('StartPage');
// patient route 
// registration start 
Route::get('/patientsingup', 'PatientController@singup')->name('PatientSingup');
Route::post('/patientregiste', 'PatientController@register');
//  registration end 
Route::get('/patientsingin', 'PatientController@singin')->name('PatientSingin');
//  profile start 
Route::get('/patientprofile/{id}', 'PatientController@profile')->name('PatientProfile');
Route::get('/patientediteprofile', 'PatientController@edite')->name('PatientEdite');
// profile end 
// find doctor and booking  start 
Route::get('/finddoctor', 'PatientController@find')->name('FindDoctor');
Route::get('/filteringresult', 'PatientController@filtering')->name('Filtering');
// we should pass doctor id 
Route::get('/bookingform/{id}', 'PatientController@booking');
Route::post('/storebooking/{id}', 'PatientController@store');

// find doctor and booking  end 
Route::get('/request', 'PatientController@request')->name('Request');
Route::get('/responce', 'PatientController@responce')->name('Responce');
// doctor route 
//  registration start  
Route::get('/doctorsingup', 'DoctorController@singup');
Route::post('/doctorregister', 'DoctorController@register')->name('Doctor-Singup');
Route::get('/doctorsingin', 'DoctorController@singin')->name('Doctor-Singin');
// registration end  
//  profile  start 
Route::get('/doctorprofile/{id}', 'DoctorController@profile');
Route::post('/editeprofile/{id}/{request}', 'DoctorController@editeprofile');
//profile edite
// shecdula start 
Route::get('/doctorschedule/{id}', 'DoctorController@getschedule');
Route::post('/doctorschedule/{id}/{request}', 'DoctorController@addworkingday');
Route::get('/workingday/{id}', 'DoctorController@editeworkingday');
Route::post('/edite/{id}/{request}', 'DoctorController@storeworkingday');
Route::get('/delete/{id}', 'DoctorController@deletworkingday');
// redirect to view all schedule 
//shecdula end


Auth::routes();
//patient route 
// inbox start 
Route::get('/doctorinbox/{id}', 'DoctorController@inbox');
// inbox end 
//setappoinment start 
Route::get('/setappoinment/{requestid}', 'DoctorController@appoinment');
Route::post('/sendappoinment/{requestid}', 'DoctorController@setappoinment');
//setappoinment end 
// inbox start
Route::get('/responce/{id}', 'PatientController@responce')->name('Responce'); 
// inbox end 
Route::get('/home', 'HomeController@index')->name('home');
