<?php

namespace App\Http\Controllers\API\Vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo\Version;
use App\Http\Resources\Version\VersionResource;

class FiltroController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'precio_min' => 'integer|min:0',
            'precio_max' => 'nullable|integer|min:0',
            'cilindraje_min' => 'integer|min:0',
            'cilindraje_max' => 'nullable|integer|min:0',
            'bluetooth' => 'nullable|string|in:si,no',
            'velocidad_automatica' => 'integer|min:0'
        ]);

        try {
            $precio_min = $request->input('precio_min', 0);
            $precio_max = $request->input('precio_max', NULL);
            $cilindraje_min = $request->input('cilindraje_min', 0);
            $cilindraje_max = $request->input('cilindraje_max', NULL);
            $tipo_combustible = $request->input('tipo_combustible', NULL);
            $velocidad_automatica = $request->input(
                'velocidad_automatica', NULL
            );
            $bluetooth = $request->input('bluetooth', NULL);
    
            $versionList = Version::where('estado', 'activo');

            if ($precio_min != NULL)
                $versionList->where('precio', '>' , $precio_min);

            // Si el precio_max esta inicializado, verifica que no sea menor al precio_min
            if ($precio_max != NULL){

                if ($precio_min > $precio_max)
                    throw new \Exception("Rango de precio es incorrecto",500); 

                $versionList->where('precio', '<' , $precio_max);
            }

            if ($cilindraje_min != NULL)
                $versionList->where('cilindraje', '>' , $cilindraje_min);

            // Si el cilindraje_max esta definido, verifica que no sea inferio a cilindraje_min            
            if ($cilindraje_max != NULL){
                if ($cilindraje_min > $cilindraje_max)
                    throw new \Exception(
                        "Rango de cilindraje es incorrecto",500
                    );

                $versionList->where('cilindraje', '<' , $cilindraje_max);
            }

            if ($tipo_combustible != NULL){
                $tipo_combustible = explode(',', urldecode($tipo_combustible));
                $versionList->whereIn('tipo_combustible', $tipo_combustible);
            }

            if ($velocidad_automatica != NULL)
                $versionList->where(
                    'velocidad_automatica', '<' , $velocidad_automatica
                );

            if ($bluetooth != NULL)
                $versionList->where('bluetooth', $bluetooth);

            // Si no existe registros
            if ($versionList->count() == 0)
                throw new \Exception("No se encontraron versiones", 404);
                

            return VersionResource::collection(
                $versionList->orderBy('nombre_version', 'asc')->paginate()
            );

        } catch (\Exception $e) {
            return response(["message" => $e->getMessage()], $e->getCode());
        }       
    }
}
