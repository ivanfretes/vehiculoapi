<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $table = 'vehiculo_modelo';
    protected $fillable = ['nombre_modelo', 'marca_id'];

    public function videos(){
    	return $this->hasMany(
    		'App\Models\Vehiculo\ModeloVideo', 
    		'modelo_id',
    		'id'
    	);
    }

    public function fotos(){
    	return $this->hasMany(
    		'App\Models\Vehiculo\ModeloFoto', 
    		'modelo_id',
    		'id'
    	);
    }


    public function marca(){
        return $this->belongsTo(
            'App\Models\Vehiculo\Marca', 
            'marca_id',
            'id'
        );
    }
}
