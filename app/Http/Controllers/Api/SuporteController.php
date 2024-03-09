<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuporteResource;
use App\Repositories\SuporteRepository;
use Illuminate\Http\Request;

class SuporteController extends Controller
{
    protected $repositorio;
    public function __construct(SuporteRepository $SuporteRepository)
    {
        $this->repositorio = $SuporteRepository;
    }
    public function index(Request $request)
    {
        $suportes = $this->repositorio->getSuportes();
        return SuporteResource::collection($suportes);

    }
}
