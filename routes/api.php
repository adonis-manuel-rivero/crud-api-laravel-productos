<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// crud api rest 

// crud de productos 
Route::get('/producto',[ProductoController::class, "funListar"]);
Route::post('/producto',[ProductoController::class, "funGuardar"]);
Route::get('/producto/{id}',[ProductoController::class, "funMostrar"]);
Route::put('/producto/{id}',[ProductoController::class, "funModificar"]);
Route::delete('/producto/{id}',[ProductoController::class, "funEliminar"]);

// crud de usuarios 
Route::get('/usuario',[UsuarioController::class, "funListar"]);
Route::post('/usuario',[UsuarioController::class, "funGuardar"]);
Route::get('/usuario/{id}',[UsuarioController::class, "funMostrar"]);
Route::put('/usuario/{id}',[UsuarioController::class, "funModificar"]);
Route::delete('/usuario/{id}',[UsuarioController::class, "funEliminar"]);

// crud categorias 
// aqui cree el controlador con el prefijo api y me dio las funciones y
//puedo acceder al apiresource
Route::apiResource("/categoria", CategoriaController::class);