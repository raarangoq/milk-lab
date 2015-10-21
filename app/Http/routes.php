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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);


Route::get('/', 'Auth\AuthController@getLogin');
//Route::get('home', 'HomeController@index');
Route::get('home', function () {
    return view('home');
});


Route::get('registrarUsuario', 'Auth\AuthController@getRegistrarUsuario');
Route::get('editarUsuario', 'Auth\AuthController@getEditarUsuario');
Route::get('/ajax', 'Auth\AuthController@getAjax');



Route::get('registrarCava', 'Auth\AuthController@getRegistrarCava');


Route::get('registrarBodega', 'Auth\AuthController@getRegistrarBodega');



