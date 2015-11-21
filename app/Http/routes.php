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
Route::post('registrarControlCava', ['as' => 'registrarControlCava', 'uses' => 'CavaControlador@postRegistrarControlCava']); 
Route::get('borrarControlCava', 'CavaControlador@getBorrarControlCava');


//LISTAR CONTROL DE CAVA
Route::get('listarControlCava', 'CavaControlador@getListarControlCava');





//------> PROGRAMAS (rutas) <------------------------------

//REGISTRAR PROGRAMA
Route::get('registrarPrograma', 'ProgramaControlador@getRegistrarPrograma');
Route::post('registrarPrograma', ['as' => 'registrarPrograma', 'uses' => 'ProgramaControlador@postRegistrarPrograma']); 
//LISTAR PROGRAMAS
Route::get('listarPrograma', 'ProgramaControlador@getListarPrograma');
Route::get('editarPrograma', 'ProgramaControlador@getEditarPrograma');
Route::post('editarPrograma', ['as' => 'editarPrograma', 'uses' => 'ProgramaControlador@postEditarPrograma']); 




//------> BODEGA (rutas) <----------------------------

//CREAR BODEGA
Route::get('registrarBodega', 'BodegaControlador@getRegistrarBodega');



//------> PROVEEDOR (rutas) <----------------------------

//CREAR PROVEEDOR
Route::get('registrarProveedor', 'ProveedorControlador@getRegistrarProveedor');

