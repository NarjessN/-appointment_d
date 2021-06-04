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
Route::get('/patientsingup', 'PatientController@singup')->name('PatientSingup');
Route::get('/patientsingin', 'PatientController@singin')->name('PatientSingin');
Route::get('/patientprofile', 'PatientController@profile')->name('PatientProfile');
Route::get('/patientediteprofile', 'PatientController@edite')->name('PatientEdite');
Route::get('/finddoctor', 'PatientController@find')->name('FindDoctor');
Route::get('/filteringresult', 'PatientController@filtering')->name('Filtering');
Route::get('/bookingform', 'PatientController@booking')->name('Booking');
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
// redirect to view all schedule 
//shecdula end
Route::get('/doctorinbox', 'DoctorController@inbox')->name('Doctor-Inbox');
Route::get('/setappoinment', 'DoctorController@appoinment')->name('Appoinment');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
