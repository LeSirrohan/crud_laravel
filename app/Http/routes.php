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

Route::get('/', 'EmpresaController@index');

//Route::get('home', 'HomeController@index');
/*
Route::get('/', 'EmpresaController@index');
Route::get('empresa', 'EmpresaController@listar');
Route::get('registrar', 'EmpresaController@registrar');
Route::resource('register', 'EmpresaController@store');
Route::resource('eliminar/{id´}', 'EmpresaController@eliminar');
Route::put('editar/{id}', 'EmpresaController@editar');*/
Route::resource('empresa','EmpresaController');

