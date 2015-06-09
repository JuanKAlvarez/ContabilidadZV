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


Route::group(['prefix'=>'venta','namespace' => '\Venta', 'middleware'=> [ 'auth'] ], function()
{
    Route::resource('internet',	 	'InternetController');
    Route::resource('impresora', 	'ImpresoraController');
    Route::resource('papeleria', 	'PapeleriaController');
    Route::resource('servicio', 	'ServicioController');
    Route::resource('gana',		 	'GanaController');
    Route::resource('minutos-ip',	'MinutosIPController');
    Route::resource('win-red',		'WinRedController');

});

