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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('skills', 'SkillsController@index');

Route::get('experience', 'ExperienceController@index');

Route::get('portfolio', 'PortfolioController@index');

Route::get('personal', 'PersonalController@index'); //about and personal are the same (from old naming scheme)
Route::get('about', 'PersonalController@index'); //about and personal are the same 
Route::get('contact', 'PersonalController@contact');

Route::get('achievements', 'AchievementController@index');

Route::get('pricing', 'PricingController@index');
Route::get('freelance', 'PricingController@index'); //old name

Route::get('log', 'LogController@index');
Route::get('log/{account}', 'LogController@log');
Route::get('logs', 'LogController@index'); //Old name scheme
Route::get('logs/{account}', 'LogController@log'); //Old name scheme



Route::get('downloads/{documentName}', 'DocumentController@getFile');
Route::get('documents/{documentName}', 'DocumentController@getFile');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
