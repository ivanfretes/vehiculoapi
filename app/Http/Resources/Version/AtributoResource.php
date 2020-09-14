<?php

namespace App\Http\Resources\Version;

use Illuminate\Http\Resources\Json\JsonResource;

class AtributoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   
        

        return [
            'version_id' => $this->version_id,
            'atributo_id' => $this->atributo_id,
            'nombre' => $this->atributo_personalizado->nombre,
            'valor' => $this->valor,
        ];
    }
}
