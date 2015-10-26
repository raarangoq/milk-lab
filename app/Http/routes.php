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
Route::get('listarrUsuario', 'UsuarioControlador@getListarrUsuario');
//EDITAR PERFIL
Route::get('editarPerfil', 'UsuarioControlador@getEditarPerfil');
Route::post('editarPerfil', ['as' => 'editarPerfil', 'uses' => 'UsuarioControlador@postEditarPerfil']);





//------> CAVA (rutas) <------------------------------

//CREAR CAVA
Route::get('registrarCava', 'CavaControlador@getRegistrarCava');

//EDITAR CAVA
Route::get('editarCava', 'CavaControlador@getEditarCava');


//------> BODEGA (rutas) <----------------------------

//CREAR BODEGA
Route::get('registrarBodega', 'BodegaControlador@getRegistrarBodega');



//------> PROVEEDOR (rutas) <----------------------------


//CREAR PROVEEDOR
Route::get('registrarProveedor', 'ProveedorControlador@getRegistrarProveedor');


//------> FICHA REACTIVO (rutas) <----------------------------
Route::get('registrarReactivo', 'ReactivoControlador@getRegistrarReactivo');
Route::post('registrarReactivo', ['as' => 'registrarReactivo', 'uses' => 'ReactivoControlador@postRegistrarReactivo']);
