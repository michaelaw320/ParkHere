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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('master_template', 'MasterTemplateController@index');

Route::get('form_permohonan', 'PermohonanController@form');
Route::get('daftar_permohonan', 'PermohonanController@get');
Route::get('detil_permohonan', 'PermohonanController@detil');
Route::post('permohonan', 'PermohonanController@entry');