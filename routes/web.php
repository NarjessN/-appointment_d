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
Route::get('/doctorsingup', 'DoctorController@singup')->name('DoctorSingup');
Route::post('/doctorsingup', 'DoctorController@register');
Route::get('/doctorsingin', 'DoctorController@singin')->name('DoctorSingin');
// Route::get('/doctorprofile', 'DoctorController@profile')->name('DoctorProfile');
Route::get('/doctorschedule', 'DoctorController@schedule')->name('DoctorSchedule');
Route::get('/doctorinbox', 'DoctorController@inbox')->name('DoctorInbox');
Route::get('/setappoinment', 'DoctorController@appoinment')->name('Appoinment');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
