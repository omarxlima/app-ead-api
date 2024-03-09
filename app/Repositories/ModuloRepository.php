<?php 

namespace App\Repositories;

use App\Models\Modulo;

class ModuloRepository
{
    protected $entidade;
    public function __construct(Modulo $model)
    {
        $this->entidade = $model;
    }

    public function getModulosByCursoId($cursoId)
    {
        return $this->entidade->where('curso_id', $cursoId)->get();
    }

    public function getModulo(string $identificador)
    {
        return $this->entidade->findOrFail($identificador);
    }
}