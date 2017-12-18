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

Route::group(['middleware' => ['web']], function () {
    	Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
        
        Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
        Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');
        
        Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'Auth\PasswordController@reset');
        
        Route::get('medicine', ['uses' => 'MedicineController@getIndex', 'as' => 'medicine.index']);
        Route::get('medicine', ['uses' => 'MedicineController@show', 'as' => 'medicine.index']);

        
        Route::get('/', ['uses' => 'indexController@getIndex', 'as' => 'index.welcome']);
          
        Route::get('admin', ['uses' => 'AdminController@getIndex', 'as' => 'admin.index']);
           
        Route::get('addMedicine', ['uses' => 'AddMedicineController@getIndex', 'as' => 'add_medicine.index']);
        Route::get('medicine', ['uses' => 'AddSyndromeController@show', 'as' => 'medicine.index']);
        
        
        Route::get('addSyndrome', ['uses' => 'AddSyndromeController@getIndex', 'as' => 'add_syndrome.index']);
        
        Route::post('addSyndrome', 'AddSyndromeController@store');        
        Route::post('addMedicine', 'AddMedicineController@store');
        Route::post('medicine', 'MedicineController@store');

        
        


        
        
        

});
