<?php

//--------> LOGIN (rutas) <--------------------------
Route::get('login', 'Auth\AuthController@getLogin');

Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);

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
Route::get('filtrarUsuario', 'UsuarioControlador@getFiltrarListarUsuario');

//EDITAR PERFIL
Route::get('editarPerfil', 'UsuarioControlador@getEditarPerfil');
Route::post('editarPerfil', ['as' => 'editarPerfil', 'uses' => 'UsuarioControlador@postEditarPerfil']);



//------> CAVA (rutas) <------------------------------
//REGISTRAR CAVA
Route::get('registrarCava', 'CavaControlador@getRegistrarCava');
Route::post('registrarCava', ['as' => 'registrarCava', 'uses' => 'CavaControlador@postRegistrarCava']);
//LISTAR CAVA
Route::get('listarCava', 'CavaControlador@getListarCava');
Route::get('filtrarCava', 'CavaControlador@getFiltrarListarCava');
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

//------> FLUJO DE CAVA (rutas) <----------------------------
//REGISTRAR FLUJO DE CAVA 
Route::get('registrarFlujoCava', 'FlujoCavaControlador@getRegistrarFlujoCava');
Route::get('registrarFlujoCavaAJAX','FlujoCavaControlador@getRegistrarFlujoCavaAJAX');
//LISTAR FLUJO DE CAVA
Route::get('listarFlujoCava','FlujoCavaControlador@getListarFlujoCava');
//EDITAR FLUJO DE CAVA
Route::get('editarFlujoCava','FlujoCavaControlador@getEditarFlujoCava');
Route::post('editarFlujoCava',['as'=>'editarFlujoCava','uses'=>'FlujoCavaControlador@postEditarFlujoCava']);
//ELIMINAR FLUJO DE CAVA
Route::get('borrarFLujoCava','FlujoCavaControlador@getBorrarFlujoCava');


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
Route::get('registrarFlujoBodegaAJAX', 'FlujoBodegaControlador@getRegistrarFlujoBodegaAJAX');
//LISTAR FLUJO DE BODEGA
Route::get('listarFlujoBodega', 'FlujoBodegaControlador@getListarFlujoBodega');
//EDITAR FLUJO DE BODEGA
Route::get('editarFlujoBodega', 'FlujoBodegaControlador@getEditarFlujoBodega');
Route::post('editarFlujoBodega', ['as' => 'editarFlujoBodega', 'uses' => 'FlujoBodegaControlador@postEditarFlujoBodega']);
//ELIMINAR/BORRAR FLUJO DE BODEGA
Route::get('borrarFlujoBodega', 'FlujoBodegaControlador@getBorrarFlujoBodega');

//----->LOTE DE MATERIA PRIMA (rutas) <---------------------------
//REGISTRAR LOTE DE PRODUCTO DERIVADO
Route::get('registrarLoteMateriaPrima', 'LoteMateriaPrimaControlador@getRegistrarLoteMateriaPrima');



//------> BODEGA (rutas) <----------------------------
//REGISTRAR BODEGA
Route::get('registrarBodega', 'BodegaControlador@getRegistrarBodega');
Route::post('registrarBodega', ['as' => 'registrarBodega',
    'uses' => 'BodegaControlador@postRegistrarBodega']);
//EDITAR BODEGA 
Route::get('editarBodega', 'BodegaControlador@getEditarBodega');
Route::post('editarBodega', ['as' => 'editarBodega', 'uses' => 'BodegaControlador@postEditarBodega']);
//LISTAR BODEGA
Route::get('listarBodega', 'BodegaControlador@getListarBodega');

//REGISTRAR FLUJO DE BODEGA
//Route::get('registrarFlujoBodega', 'BodegaControlador@getRegistrarFlujoBodega');
//Route::post('registrarFlujoBodega', ['as' => 'registrarFlujoBodega','uses' => 'BodegaControlador@postRegistrarFlujoBodega']);
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


//----->PRODUCTO DERIVADO (rutas) <---------------------------
//REGISTRAR PRODUCTO DERIVADO
Route::get('registrarProductoDerivado', 'ProductoDerivadoControlador@getRegistrarProductoDerivado');
Route::get('registrarProductoDerivadoAJAX', 'ProductoDerivadoControlador@getRegistrarProductoDerivadoAJAX');
//Route::post('registrarProductoDerivado',['as' => 'registrarProductoDerivado','uses'=>'ProductoDerivadoControlador@postRegistrarProductoDerivado']);
//EDITAR PRODUCTO DERIVADO
Route::get('editarProductoDerivado', 'ProductoDerivadoControlador@getEditarProductoDerivado');
Route::get('editarProductoDerivadoAJAX', 'ProductoDerivadoControlador@getEditarProductoDerivadoAJAX');
//Route::post('editarProductoDerivado', ['as' => 'editarProductoDerivado', 'uses' => 'ProductoDerivadoControlador@postEditarProductoDerivado']); 
//LISTAR PRODUCTO DERIVADO
Route::get('listarProductoDerivado', 'ProductoDerivadoControlador@getListarProductoDerivado');

//----->LOTE DE PRODUCTO DERIVADO (rutas) <---------------------------
//REGISTRAR LOTE DE PRODUCTO DERIVADO
Route::get('registrarLoteProductoDerivado', 'LoteProductoDerivadoControlador@getRegistrarLoteProductoDerivado');

//LISTAR LOTE DE PRODUCTO DERIVADO
Route::get('listarLoteProductoDerivado', 'LoteProductoDerivadoControlador@getListarLoteProductoDerivado');
