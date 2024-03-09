<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AulaResource;
use App\Repositories\AulaRepository;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    protected $repositorio;
    public function __construct(AulaRepository $aulaRepository)
    {
        $this->repositorio = $aulaRepository;
    }

    public function index($moduloId)
    {
        $aulas = $this->repositorio->getAulasByModuloId($moduloId);
        return AulaResource::collection($aulas);
    }

    public function show($moduloId)
    {
        return new AulaResource($this->repositorio->getAula($moduloId));
    }
}
