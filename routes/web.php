<?php

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

App::setLocale('es');

Route::get('/', function () {
    return view('welcome');
});

Route::get('ventas', function () {
    return view('productosRoute');
   
});

Route::get('ventas/{usuario}', function ($usuario) {
    return 'Bienvenutty '.$usuario; 
});

Route::get('ventasid/{usuario}&{id}', function ($usuario, $id) {
    return "Bienvenutti $usuario que tiene id: $id";
});

Route::get('ventasid/{usuario?}', function ($usuario='anonimus') {
    return "Bienvenutti $usuario";
});

Route::get('home', function () {
    $nombre='El salda';
    return view('prueba',['nombre'=>$nombre]);
})->name('home');

//Route::get('/catalogo', 'CatalogoController@index')->name('catalogo');
Route::resource('catalogo', 'Productocontroller');
//Route::resource('catalogo', 'CatalogoController')->only([
//    'index', 'show'
//]);
//Route::resource('catalogo', 'CatalogoController')->except([
//    'index', 'show'
//]);

//Route::resource('catalogo', 'CatalogoController2');
Route::view('/contacto','contacto')->name('contacto');
Route::get('mensajes/crear', 'MensajesController@create') 
       ->name('crear-mensaje');
Route::get('/catalogo', 
           'ProductoController@index')->name('productos.index');
Route::get('/catalogo/{id}', 
           'ProductoController@show')->name('productos.show');
Route::post('mensajes', 'MensajesController@store')->name('guardar-mensaje');
Route::get('mensajes', 'MensajesController@index')
       ->name('ver-mensajes');
Route::get('mensajes/{id}', 'MensajesController@show')
       ->name('buscar-mensaje');
Route::get('mensajes/{id}/editar', 'MensajesController@edit')
       ->name('editar-mensaje');
Route::delete('mensajes/{id}', 'MensajesController@destroy')
       ->name('eliminar-mensaje');
