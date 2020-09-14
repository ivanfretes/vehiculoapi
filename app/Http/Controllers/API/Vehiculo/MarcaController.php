<?php

namespace App\Http\Controllers\API\Vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Vehiculo\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Marca::orderBy('nombre_marca', 'asc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nombre_marca' => 'required']);

        $nombre_marca = $request->input('nombre_marca', NULL);
        $logo = $request->input('logo', NULL);

        try {
            $marca = new Marca;
            $marca->nombre_marca = urldecode($nombre_marca);
            $marca->logo = urldecode($logo);
            $marca->save();

            return $marca;
        } catch (\Exception $e) {
            return response($e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $nombre_marca = $request->input('nombre_marca', NULL);
        $logo = $request->input('logo', NULL);
        
        try {
            if (($marca = Marca::find($id)) == NULL)
                throw new \Exception("Marca no existente");

            if ($nombre_marca != NULL)
                $marca->nombre_marca = urldecode($nombre_marca);

            if ($logo != NULL)
                $marca->logo = urldecode($logo);

            $marca->save();
            return $marca;
                
        } catch (\Exception $e) {
            return response($e->getMessage(), 500);
        }
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
