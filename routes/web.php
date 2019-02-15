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

Route::get('/', function () {
    return view('welcome');
});

/* DOCTOR */
Route::get('doctors/edit/{id}', 'DoctorController@edit');
Route::get('doctors/create', 'DoctorController@create');
Route::get('doctors/', 'DoctorController@index');
Route::get('doctors/{id}', 'DoctorController@show');
Route::get('doctors/specializations/{id}', 'DoctorController@listBySpecialization');

/* PATIENTS */
Route::get('patients/', 'PatientController@index');
Route::get('patients/{id}', 'PatientController@show');

/* SPECIALIZATION */
Route::get('specializations/', 'SpecializationController@index');
Route::get('specializations/create/', 'SpecializationController@create');
Route::post('specializations/', 'SpecializationController@store');

/* VISITS */
Route::get('visits/', 'VisitController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
