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
//EDITAR CAVA
Route::get('editarCava', 'CavaControlador@getEditarCava');
Route::post('editarCava', ['as' => 'editarCava', 'uses' => 'CavaControlador@postEditarCava']); 
//REGISTRAR CONTROL CAVA
Route::get('registrarControlCava', 'CavaControlador@getRegistrarControlCava');
Route::post('registrarControlCava', ['as' => 'registrarControlCava', 'uses' => 'CavaControlador@postRegistrarControlCava']);
//ELIMINAR/BORRAR CONTROL CAVA 
Route::get('borrarControlCava', 'CavaControlador@getBorrarControlCava');
//LISTAR CONTROL DE CAVA
Route::get('listarControlCava', 'CavaControlador@getListarControlCava');



//------> PROGRAMAS (rutas) <------------------------------

//REGISTRAR PROGRAMA
Route::get('registrarPrograma', 'ProgramaControlador@getRegistrarPrograma');
Route::post('registrarPrograma', ['as' => 'registrarPrograma', 'uses' => 'ProgramaControlador@postRegistrarPrograma']); 
//LISTAR PROGRAMAS
Route::get('listarPrograma', 'ProgramaControlador@getListarPrograma');
//EDITAR PROGRAMAS
Route::get('editarPrograma', 'ProgramaControlador@getEditarPrograma');
Route::post('editarPrograma', ['as' => 'editarPrograma', 'uses' => 'ProgramaControlador@postEditarPrograma']); 



//------> MATERIA PRIMA (rutas) <------------------------------

//REGISTRAR MATERIA PRIMA
Route::get('registrarMateriaPrima', 'MateriaPrimaControlador@getRegistrarMateriaPrima');
Route::post('registrarMateriaPrima', ['as' => 'registrarMateriaPrima', 'uses' => 'MateriaPrimaControlador@postRegistrarMateriaPrima']);
//LISTAR MATERIA PRIMA
Route::get('listarMateriaPrima', 'MateriaPrimaControlador@getListarMateriaPrima');
//EDITAR MATERIA PRIMA
Route::get('editarMateriaPrima', 'MateriaPrimaControlador@getEditarMateriaPrima');
Route::post('editarMateriaPrima', ['as' => 'editarMateriaPrima', 'uses' => 'MateriaPrimaControlador@postEditarMateriaPrima']); 



//------> FLUJO DE BODEGA (rutas) <----------------------------

//REGISTRAR FLUJO DE BODEGA
Route::get('registrarFlujoBodega', 'FlujoBodegaControlador@getRegistrarFlujoBodega');
Route::get('registrarFlujoBodega2', 'FlujoBodegaControlador@getRegistrarFlujoBodega2');
//LISTAR FLUJO DE BODEGA
Route::get('listarFlujoBodega', 'FlujoBodegaControlador@getListarFlujoBodega');
//EDITAR FLUJO DE BODEGA
Route::get('editarFlujoBodega', 'FlujoBodegaControlador@getEditarFlujoBodega');
//falta---post
//ELIMINAR/BORRAR FLUJO DE BODEGA



//------> BODEGA (rutas) <----------------------------

//CREAR BODEGA
Route::get('registrarBodega', 'BodegaControlador@getRegistrarBodega');

Route::post('registrarBodega', ['as' => 'registrarBodega', 
	                          'uses' => 'BodegaControlador@postRegistrarBodega']);
//EDITAR BODEGA 
Route::get('editarBodega', 'BodegaControlador@getEditarBodega');
Route::post('editarBodega', ['as' => 'editarBodega', 'uses' => 'BodegaControlador@postEditarBodega']);
//LISTAR BODEGA
Route::get('listarBodega', 'BodegaControlador@getListarBodega');
//REGISTRAR FLUJO DE BODEGA
Route::get('registrarFlujoBodega', 'BodegaControlador@getRegistrarFlujoBodega');

Route::post('registrarFlujoBodega', ['as' => 'registrarFlujoBodega', 
	                          'uses' => 'BodegaControlador@postRegistrarFlujoBodega']);

//------> PROVEEDOR (rutas) <----------------------------



//CREAR PROVEEDOR

Route::get('registrarProveedor', 'ProveedorControlador@getRegistrarProveedor');
Route::post('registrarProveedor', ['as' => 'registrarProveedor', 'uses' => 'ProveedorControlador@postRegistrarProveedor']); 
//LISTAR PROVEEDOR
Route::get('listarProveedor', 'ProveedorControlador@getListarProveedor');
//EDITAR PROVEEDOR
Route::get('editarProveedor', 'ProveedorControlador@getEditarProveedor');
Route::post('editarProveedor', ['as' => 'editarProveedor', 'uses' => 'ProveedorControlador@postEditarProveedor']); 



//------> FICHA REACTIVO (rutas) <----------------------------
Route::get('registrarReactivo', 'ReactivoControlador@getRegistrarReactivo');
Route::post('registrarReactivo', ['as' => 'registrarReactivo', 'uses' => 'ReactivoControlador@postRegistrarReactivo']);
