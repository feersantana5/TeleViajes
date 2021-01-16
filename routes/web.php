<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});



//REDIRECCIONAMIENTO DE VISTAS A USERCONTROLLER
Route::get('/login', 'userController@login');
Route::get('/register', 'userController@register');
Route::get('/cruceros', 'userController@cruceros');
Route::get('/paquetes', 'userController@paquetes');
Route::get('/actividades', 'userController@actividades');
Route::get('/universitarios', 'userController@universitarios');
Route::get('/ancianos', 'userController@ancianos');
Route::get('/escolares', 'userController@escolares');
Route::get('/familia', 'userController@familia');



//PRODUCTCONTROLLER AJAX

Route::get('/numero_productos', 'ProductController@numero_productos');
Route::get('/get_numTransc', 'ProductController@get_numTransc');

//PRODUCTCONTROLLER
Route::get('/crearProducto', 'ProductController@crearProducto');
Route::post('/addProducto', 'ProductController@addProducto');
Route::get('/shopAdmin', 'ProductController@listaProductos');
Route::get('/shopAdmin/eliminarProducto', 'ProductController@eliminarProducto');



Route::get('/shopAdmin/actualizarProducto', 'ProductController@actualizarProducto');
Route::post('/procesar_producto_actualizado', 'ProductController@procesar_producto_actualizado');



//USERCONTROLLER
Route::post('/procesar_login', 'userController@procesar_login');
Route::post('/procesar_registro', 'userController@procesar_registro');
Route::get("/cerrar_session","UserController@cerrar_session");
Route::post('/procesar_contacto', 'userController@procesar_contacto');



Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/usuario', function () {
    return view('usuario');
});

//PRODUCTO

