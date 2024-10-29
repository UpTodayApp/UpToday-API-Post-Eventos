<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\eventoController;
use App\Http\Controllers\MegustaController;
use App\Http\Controllers\usuarioController;


Route::get('/post', [PostController::class, 'ListarTodas']);
Route::get('/post/{d}', [PostController::class, 'ListarUna']);
Route::post('/post', [PostController::class, 'Crear']);
Route::delete('/post/{d}', [PostController::class, 'Eliminar']);
Route::put('/post/{d}', [PostController::class, 'Modificar']);


Route::get('/comentario', [ComentarioController::class, 'ListarTodas']);
Route::get('/comentario/{d}', [ComentarioController::class, 'ListarUna']);
Route::post('/comentario', [ComentarioController::class, 'Crear']);
Route::delete('/comentario/{d}', [ComentarioController::class, 'Eliminar']);
Route::put('/comentario/{d}', [ComentarioController::class, 'Modificar']);


Route::get('/megusta', [MegustaController::class, 'ListarTodasPost']);
Route::get('/megusta/{d}', [MegustaController::class, 'ListarUnaPost']);
Route::post('/megusta', [MegustaController::class, 'CrearPost']);
Route::delete('/megusta/{d}', [MegustaController::class, 'EliminarPost']);
Route::put('/megusta/{d}', [MegustaController::class, 'ModificarPost']);


Route::get('/usuario', [usuarioController::class, 'ListarTodas']);
Route::get('/usuario/{d}', [usuarioController::class, 'ListarUna']);
Route::post('/usuario', [usuarioController::class, 'Crear']);
Route::delete('/usuario/{d}', [usuarioController::class, 'Eliminar']);
Route::put('/usuario/{d}', [usuarioController::class, 'Modificar']);

Route::get('/evento', [eventoController::class, 'ListarTodas']);
Route::get('/evento/{d}', [eventoController::class, 'ListarUna']);
Route::post('/evento', [eventoController::class, 'Crear']);
Route::delete('/evento/{d}', [eventoController::class, 'Eliminar']);
Route::put('/evento/{d}', [eventoController::class, 'Modificar']);
