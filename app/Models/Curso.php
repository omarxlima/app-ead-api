<?php

namespace App\Models;

// use App\Models\UuidTraits\UuidTrait;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Curso extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = ['nome', 'descricao', 'imagem'];

    public function modulos()
    {
        return $this->hasMany(Modulo::class);
    }
}
