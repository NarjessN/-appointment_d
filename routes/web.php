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

// pateint route start  
// registration start 
Route::get('/patientsingup', 'PatientController@singup')->name('PatientSingup');
Route::post('/patientregiste', 'PatientController@register');
Route::get('/patientsingin', 'PatientController@singin')->name('PatientSingin');
//  registration end 

//  profile start 
Route::get('/patientprofile/{id}', 'PatientController@profile')->name('PatientProfile');
Route::get('/patientediteprofile', 'PatientController@edite')->name('PatientEdite');
// profile end 

// find doctor and booking  start 
Route::get('/finddoctor/{id}', 'PatientController@find')->name('FindDoctor');
Route::get('/bookingform/{idpatient}/{iddocotr}', 'PatientController@booking');
Route::post('/storebooking/{idpatient}/{iddocotr}', 'PatientController@store');
Route::get('/yourrequest/{id}', 'PatientController@request')->name('Request');

Route::get('/patientinbox/{id}', 'PatientController@responce')->name('Responce'); 
Route::get ('/filteringdoctor/{id}','PatientController@filtering');
// pateint route end 



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
// inbox start 
Route::get('/doctorinbox/{id}', 'DoctorController@inbox');
// inbox end 
//setappoinment start 
Route::get('/setappoinment/{requestid}', 'DoctorController@appoinment');
Route::post('/sendappoinment/{requestid}', 'DoctorController@setappoinment');
//setappoinment end 

// start page route 
Route::get('/', 'HomePageController@index')->name('StartPage');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
// 

