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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);

Route::get('/test', 'HomeController@test')->name('test');


Route::get('/medical_equipment/index', 'MedicalEquipmentController@index')->name('medical_equipment.index');
Route::get('/medical_equipment/store', 'MedicalEquipmentController@store')->name('medical_equipment.store');
Route::get('/medical_equipment/update', 'MedicalEquipmentController@update')->name('medical_equipment.update');
Route::get('/medical_equipment/delete/{id}', 'MedicalEquipmentController@Delete')->name('medical_equipment.delete');
Route::get('/medical_equipment/search', 'MedicalEquipmentController@search')->name('medical_equipment.search');




Route::get('/', 'HomeController@index')->name('welcome');
