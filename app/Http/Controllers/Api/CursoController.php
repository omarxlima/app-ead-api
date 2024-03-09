<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CursoResource;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index ()
    {
        $cursos = Curso::get();
        return CursoResource::collection($cursos);
    }

    public function show($id) {
        $curso = Curso::findOrFail($id);
        return new CursoResource($curso);
    }
}
