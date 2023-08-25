<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/noticiasMostrar',[EventosController::class,'getnoticias']);
Route::get('/10titulos', [EventosController::class, 'getPrimeros10Titulos']);
Route::post('/insertarNoticiaPostman', [EventosController::class, 'insertarNoticiaPostman']);
Route::get('/{titulo}/BuscarPorTitulo', [EventosController::class, 'buscarNoticiaPorTitulo']);
Route::get('/NoticiasPorEvento', [EventosController::class, 'contarNoticiasPrimerEvento']);
Route::get('/{eventoId}/verificarNoticiaPorIdEvento', [EventosController::class, 'verificarNoticiaPorIdEvento']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

