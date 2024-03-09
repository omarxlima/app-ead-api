<?php 

namespace App\Repositories;

use App\Models\Curso;

class CursoRepository
{
    protected $entidade;
    public function __construct(Curso $model)
    {
        $this->entidade = $model;
    }

    public function getAllCursos()
    {
        return $this->entidade->get();
    }

    public function getCurso(string $identificador)
    {
        return $this->entidade->findOrFail($identificador);
    }
}