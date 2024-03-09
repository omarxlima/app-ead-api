<?php

use App\Http\Controllers\Api\{
    CursoController,
    ModuloController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/{id}', [CursoController::class, 'show']);

Route::get('/cursos/{id}/modulos', [ModuloController::class, 'index']);

Route::get('/', function () {
    return response()->json([
        'success' => true,
    ]);
});




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
