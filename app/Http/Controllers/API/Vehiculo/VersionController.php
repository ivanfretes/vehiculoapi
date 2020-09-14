<?php

namespace App\Http\Controllers\API\Vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo\Version;
use App\Http\Resources\Version\VersionResource;

class VersionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $modelo_id = $request->input('modelo_id', NULL);

        $versionList = Version::where('estado', 'activo');

        if ($modelo_id != NULL){
            $versionList = $versionList->where('modelo_id', $modelo_id);
        }

        return VersionResource::collection(
            $versionList->orderBy('nombre_version', 'asc')->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $version = Version::find($id);    
            if ($version == NULL)
                throw new Exception("Version no encontrada", 404);

            return new VersionResource($version);
        } catch (Exception $e) {
            return response(["message" => $e->getMessage()], $e->getCode());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
