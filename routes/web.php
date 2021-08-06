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
Route::get('/logincheckd','PatientController@logincheckd');
Route::get('/changpassword/{id}','PatientController@changpassword');
Route::post('/storepatientpassword/{id}','PatientController@storepassword');
Route::get('/patientlogout/{id}','PatientController@logout');
//  registration end 

//  profile start 
Route::get('/patientprofile/{id}', 'PatientController@profile')->name('PatientProfile');
Route::get('/patientediteprofile/{id}', 'PatientController@edite')->name('PatientEdite');
// Route::post('/editeprofile/{id}','PatientController@editing');
Route::post ('/updateprofile/{id}','PatientController@editing');
// profile end 

// find doctor and booking  start 
Route::get('/finddoctor/{id}', 'PatientController@find')->name('FindDoctor');
Route::get('/bookingform/{idpatient}/{iddocotr}', 'PatientController@booking');
Route::post('/storebooking/{idpatient}/{iddocotr}', 'PatientController@store');
Route::get ('/viewdoctorprofile/{idpatient}/{iddocotr}','PatientController@viewdoctorprofile');
Route::get('/yourrequest/{id}', 'PatientController@request')->name('Request');

Route::get('/patientinbox/{id}', 'PatientController@responce')->name('Responce'); 
Route::get ('/filteringdoctor/{id}','PatientController@filtering');
// pateint route end 



// doctor route 
//  registration start  
Route::get('/doctorsingup', 'DoctorController@singup');
Route::post('/doctorregister', 'DoctorController@register')->name('Doctor-Singup');
// registration end  
//login start 
Route::get('/doctorsingin', 'DoctorController@singin')->name('Doctor-Singin');
Route::post('/logincheckd','DoctorController@logincheckd');
// login end 
// change password start
Route:: get ('/changepssword/{id}','DoctorController@changepssword');
Route::post('/storepassword/{id}','DoctorController@storepassword');
// change password end 
//logout start
Route:: get('/docotorlogout/{id}','DoctorController@docotorlogout'); 
//logout end 
//  profile  start 
Route::get('/doctorprofile/{id}', 'DoctorController@profile');
Route::post('/editeprofile/{id}', 'DoctorController@editeprofile');
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
Route::post('/sendappoinment/{requestid}/{doctorid}', 'DoctorController@setappoinment');
Route:: get ('/rejectappoinmnet/{requestid}/{docotrid}','DoctorController@rejectappoinment');
//setappoinment end 
// patient list start 
Route::get('/patientlist/{doctorid}', 'DoctorController@patientlist');
// patient list end 
// start page route 
Route::get('/', 'HomePageController@index')->name('StartPage');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
// 

