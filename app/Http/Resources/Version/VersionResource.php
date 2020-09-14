<?php

namespace App\Http\Resources\Version;

use Illuminate\Http\Resources\Json\JsonResource;

class VersionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        // Datos del modelo
        $this->modelo->marca;
        $this->modelo->videos;
        $this->modelo->fotos;

        // Datos de los atributos
      //  $this->atributo_version_info->atributos;

        return [
            "id" => $this->id,
            "nombre_version" => $this->nombre_version,
            "precio" => $this->precio,
            "cilindraje" => $this->cilindraje,
            "tipo_combustible" => $this->tipo_combustible,
            "velocidad_automatica" => $this->velocidad_automatica,
            "bluetooth" => $this->bluetooth,
            "estado" => $this->estado,
            "modelo_id" => $this->modelo_id,
            "tipo_combustible_info" => $this->tipo_combustible_info,

            // Modelo
            "modelo" => $this->modelo,

            // Otros atributos que puede agregar el usuario
            "atributos" => AtributoResource::collection(
                $this->atributo_version_info
            )
        ];

    }
}
