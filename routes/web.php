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
Route::get('/medical_equipment/create', 'MedicalEquipmentController@create')->name('medical_equipment.create');
Route::get('/medical_equipment/edit/{id}', 'MedicalEquipmentController@edit')->name('medical_equipment.edit');
Route::post('/medical_equipment/store', 'MedicalEquipmentController@store')->name('medical_equipment.store');
Route::post('/medical_equipment/update/{id}', 'MedicalEquipmentController@update')->name('medical_equipment.update');
Route::post('/medical_equipment/delete/{id}', 'MedicalEquipmentController@Delete')->name('medical_equipment.delete');
Route::get('/medical_equipment/search', 'MedicalEquipmentController@search')->name('medical_equipment.search');


//Part
Route::get('/illness/index', 'IllnessController@index')->name('illness.index');
Route::get('/illness/create', 'IllnessController@index')->name('illness.create');
Route::get('/illness/edit/{id}', 'IllnessController@index')->name('illness.edit');
Route::post('/illness/store', 'IllnessController@store')->name('illness.store');
Route::post('/illness/update/{id}', 'IllnessController@update')->name('illness.update');
Route::post('/illness/delete/{id}', 'IllnessController@delete')->name('illness.delete');
Route::get('/illness/search', 'IllnessController@search')->name('illness.search');

//Part
Route::get('/medicine/index', 'JambylMedicineController@index')->name('medicine.index');
Route::get('/medicine/create', 'JambylMedicineController@index')->name('medicine.create');
Route::get('/medicine/edit/{id}', 'JambylMedicineController@index')->name('medicine.edit');
Route::post('/medicine/store', 'JambylMedicineController@store')->name('medicine.store');
Route::post('/medicine/update/{id}', 'JambylMedicineController@update')->name('medicine.update');
Route::post('/medicine/delete/{id}', 'JambylMedicineController@delete')->name('medicine.delete');
Route::get('/medicine/search', 'JambylMedicineController@search')->name('medicine.search');

//Part
Route::get('/sanatory/index', 'SanatoryController@index')->name('sanatory.index');
Route::get('/sanatory/create', 'SanatoryController@index')->name('sanatory.create');
Route::get('/sanatory/edit/{id}', 'SanatoryController@index')->name('sanatory.edit');
Route::post('/sanatory/store', 'SanatoryController@store')->name('sanatory.store');
Route::post('/sanatory/update/{id}', 'SanatoryController@update')->name('sanatory.update');
Route::post('/sanatory/delete/{id}', 'SanatoryController@delete')->name('sanatory.delete');
Route::get('/sanatory/search', 'SanatoryController@search')->name('sanatory.search');

//Part
Route::get('/sanatory/arman/index', 'SanatoryArmanController@index')->name('sanatory.arman.index');
Route::get('/sanatory/arman/create', 'SanatoryArmanController@index')->name('sanatory.arman.create');
Route::get('/sanatory/arman/edit/{id}', 'SanatoryArmanController@index')->name('sanatory.arman.edit');
Route::post('/sanatory/arman/store', 'SanatoryArmanController@store')->name('sanatory.arman.store');
Route::post('/sanatory/arman/update/{id}', 'SanatoryArmanController@update')->name('sanatory.arman.update');
Route::post('/sanatory/arman/delete/{id}', 'SanatoryArmanController@delete')->name('sanatory.arman.delete');
Route::get('/sanatory/arman/search', 'SanatoryArmanController@search')->name('sanatory.arman.search');

//Part
Route::get('/sanatory/kazakhstan/index', 'SanatoryKazakhstanController@index')->name('sanatory.kazakhstan.index');
Route::get('/sanatory/kazakhstan/create', 'SanatoryKazakhstanController@index')->name('sanatory.kazakhstan.create');
Route::get('/sanatory/kazakhstan/edit/{id}', 'SanatoryKazakhstanController@index')->name('sanatory.kazakhstan.edit');
Route::post('/sanatory/kazakhstan/store', 'SanatoryKazakhstanController@store')->name('sanatory.kazakhstan.store');
Route::post('/sanatory/kazakhstan/update/{id}', 'SanatoryKazakhstanController@update')->name('sanatory.kazakhstan.update');
Route::post('/sanatory/kazakhstan/delete/{id}', 'SanatoryKazakhstanController@delete')->name('sanatory.kazakhstan.delete');
Route::get('/sanatory/kazakhstan/search', 'SanatoryKazakhstanController@search')->name('sanatory.kazakhstan.search');




Route::get('/', 'HomeController@index')->name('welcome');
