<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AulaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => ucwords(strtolower($this->nome)),
            'descricao' => $this->descricao,
            'video' => $this->video,
        ];
    }
}
