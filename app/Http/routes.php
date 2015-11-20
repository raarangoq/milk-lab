<?php


//--------> LOGIN (rutas) <--------------------------
Route::get('login', 'Auth\AuthController@getLogin');

Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');

Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

Route::get('/', 'Auth\AuthController@getLogin');


//--------> HOME (rutas) <----------------------------
Route::get('home', function () {
    return view('home');
});
//USUARIO

//------> USUARIOS (rutas) <--------------------------

//CREAR USUARIO
Route::get('registrarUsuario', 'UsuarioControlador@getRegistrarUsuario');
Route::post('registrarUsuario', ['as' => 'registrarUsuario', 'uses' => 'UsuarioControlador@postRegistrarUsuario']);
//EDITAR USUARIO
Route::get('editarUsuario', 'UsuarioControlador@getEditarUsuario');
Route::post('editarUsuario', ['as' => 'editarUsuario', 'uses' => 'UsuarioControlador@postEditarUsuario']);
Route::get('/ajax', 'UsuarioControlador@getAjax');
//LISTAR USUARIO
Route::get('listarUsuario', 'UsuarioControlador@getListarUsuario');
//EDITAR PERFIL
Route::get('editarPerfil', 'UsuarioControlador@getEditarPerfil');
Route::post('editarPerfil', ['as' => 'editarPerfil', 'uses' => 'UsuarioControlador@postEditarPerfil']);


//------> CAVA (rutas) <------------------------------

//REGISTRAR CAVA
Route::get('registrarCava', 'CavaControlador@getRegistrarCava');
Route::post('registrarCava', ['as' => 'registrarCava', 'uses' => 'CavaControlador@postRegistrarCava']);
//LISTAR CAVA
Route::get('listarCava', 'CavaControlador@getListarCava');
Route::get('editarCava', 'CavaControlador@getEditarCava');
Route::post('editarCava', ['as' => 'editarCava', 'uses' => 'CavaControlador@postEditarCava']); 
//REGISTRAR CONTROL CAVA
Route::get('registrarControlCava', 'CavaControlador@getRegistrarControlCava');


//------> BODEGA (rutas) <----------------------------

//CREAR BODEGA
Route::get('registrarBodega', 'BodegaControlador@getRegistrarBodega');
Route::post('registrarBodega', ['as' => 'registrarBodega', 'uses' => 'BodegaControlador@postRegistrarBodega']);
//EDITAR BODEGA 
Route::get('editarBodega', 'BodegaControlador@getEditarBodega');
Route::post('editarBodega', ['as' => 'editarBodega', 'uses' => 'CavaControlador@postEditarBodega']);
//LISTAR BODEGA
Route::get('listarBodega', 'BodegaControlador@getListarBodega');


//------> PROVEEDOR (rutas) <----------------------------


//CREAR PROVEEDOR
Route::get('registrarProveedor', 'ProveedorControlador@getRegistrarProveedor');


//------> FICHA REACTIVO (rutas) <----------------------------
Route::get('registrarReactivo', 'ReactivoControlador@getRegistrarReactivo');
Route::post('registrarReactivo', ['as' => 'registrarReactivo', 'uses' => 'ReactivoControlador@postRegistrarReactivo']);
