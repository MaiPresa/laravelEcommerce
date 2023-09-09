<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlatoController;

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

Route::post('/carrito', 'nombreControlador@store');

// Route::get('/platos', 'PlatoController@index')->name('platos');
// Route::get('/platos', [PlatoController::class, 'index']);
Route::get('/platos', [PlatoController::class, 'index'])->name('platos.index');

