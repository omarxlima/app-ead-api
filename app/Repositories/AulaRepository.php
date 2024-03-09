<?php 

namespace App\Repositories;

use App\Models\Aula;

class AulaRepository
{
    protected $entidade;
    public function __construct(Aula $model)
    {
        $this->entidade = $model;
    }

    public function getAulasByModuloId($moduloId)
    {
        return $this->entidade->where('modulo_id', $moduloId)->get();
    }

    public function getAula(string $identificador)
    {
        return $this->entidade->findOrFail($identificador);
    }
}