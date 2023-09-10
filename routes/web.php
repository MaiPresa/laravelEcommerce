<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlatoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PedidosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/carrito', function () {
    return view('shoping-cart');
});


// Route::get('/platos', 'PlatoController@index')->name('platos');
// Route::get('/platos', [PlatoController::class, 'index']);
Route::get('/platos', [PlatoController::class, 'index'])->name('platos.index');


Route::get('/formulario', function () {
    return view('form');
});

Route::post('/formulario', [UsuarioController::class, 'store'])->name('usuario.store');

Route::post('/carrito', [PedidosController::class, 'storePedido'])->name('pedido.storePedido');
