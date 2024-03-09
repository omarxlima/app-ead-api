<?php 

namespace App\Repositories;

use App\Models\Modulo;
use App\Models\Suporte;

class SuporteRepository
{
    protected $entidade;
    public function __construct(Suporte $model)
    {
        $this->entidade = $model;
    }

    public function getSuportes()
    {
        return $this->entidade->get();
    }

    public function getSuporte(string $identificador)
    {
        return $this->entidade->findOrFail($identificador);
    }
}