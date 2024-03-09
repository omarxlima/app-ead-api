<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuloResource;
use App\Repositories\ModuloRepository;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    protected $repositorio;
    public function __construct(ModuloRepository $moduloRepository)
    {
        $this->repositorio = $moduloRepository;
    }
    public function index($cursoId)
    {
        $modulos = $this->repositorio->getModulosByCursoId($cursoId);
        return ModuloResource::collection($modulos);

    }

  
}
