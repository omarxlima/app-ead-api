<?php

use App\Http\Controllers\Api\{
    CursoController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/cursos', [CursoController::class, 'index']);

Route::get('/', function () {
    return response()->json([
        'success' => true,
    ]);
});




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
