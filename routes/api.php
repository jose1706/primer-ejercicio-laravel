<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */

Route::get('/', function (Request $request) {
    return "Hola Jose David Gallego, Santiago Sosa García";
});

Route::post('/signup', [AuthController::class, 'register']);
Route::post('/signin', [AuthController::class, 'login']);
Route::get('/index', [ProductoController::class, 'index']);

Route::post('/registerProduct', [ProductoController::class, 'registerProduct'])->middleware('auth:sanctum');
Route::get('/mostrarProducto/{id}', [ProductoController::class, 'mostrarProducto'])->middleware('auth:sanctum');
Route::put('/actualizarProducto/{id}', [ProductoController::class, 'actualizarProducto'])->middleware('auth:sanctum');
Route::delete('/eliminarProducto/{id}', [ProductoController::class, 'eliminarProducto'])->middleware('auth:sanctum');