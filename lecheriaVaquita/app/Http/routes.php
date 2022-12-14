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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('usuario', 'Controller',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('detallePedido', 'DetallePedidoController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('pedido', 'PedidoController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('producto', 'ProductoController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('tipoproducto', 'TipoProductoController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
