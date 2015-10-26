<?php


//--------> LOGIN (rutas) <--------------------------
Route::get('login', 'Auth\AuthController@getLogin');
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

//--------> HOME (rutas) <--------------------------
Route::get('home', function () {
    return view('home');
});


//------> USUARIOS (rutas) <--------------------------

//CREAR USUARIO
Route::get('registrarUsuario', 'UsuarioControlador@getRegistrarUsuario');
Route::post('registrarUsuario', ['as' => 'registrarUsuario', 'uses' => 'UsuarioControlador@postRegistrarUsuario']);
//EDITAR USUARIO
Route::get('editarUsuario', 'UsuarioControlador@getEditarUsuario');
Route::post('editarUsuario', ['as' => 'editarUsuario', 'uses' => 'UsuarioControlador@postEditarUsuario']);
Route::get('/ajax', 'UsuarioControlador@getAjax');
//LISTAR USUARIO
Route::get('listarrUsuario', 'UsuarioControlador@getListarrUsuario');
//EDITAR PERFIL
Route::get('editarPerfil', 'UsuarioControlador@getEditarPerfil');
Route::post('editarPerfil', ['as' => 'editarPerfil', 'uses' => 'UsuarioControlador@postEditarPerfil']);





//------> CAVA (rutas) <------------------------------

//CREAR CAVA
Route::get('registrarCava', 'CavaControlador@getRegistrarCava');



//------> BODEGA (rutas) <----------------------------

//CREAR BODEGA
Route::get('registrarBodega', 'BodegaControlador@getRegistrarBodega');



//------> PROVEEDOR (rutas) <----------------------------

//CREAR PROVEEDOR
Route::get('registrarProveedor', 'ProveedorControlador@getRegistrarProveedor');

