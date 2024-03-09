<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CursoResource;
use App\Repositories\CursoRepository;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    protected $repositorio;

    public function __construct(CursoRepository $cursoRepositorio)
    {
        $this->repositorio = $cursoRepositorio;
    }

    public function index ()
    {
        // $cursos = Curso::get();
        return CursoResource::collection($this->repositorio->getAllCursos());
    }

    public function show($id) {
        // $curso = Curso::findOrFail($id);
        return new CursoResource($this->repositorio->getCurso($id));
    }
}
