<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = ['status', 'descricao'];

    protected $OpcoesStatus = [
        'P' => 'Pendente, Aguardando Professor',
        'A' => 'Aguardando Aluno',
        'C' => 'Concluído',
    ];

}
