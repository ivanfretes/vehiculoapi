<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $table = 'vehiculo_version';


    public function atributo_version_info(){
    	return $this->hasMany(
    		'App\Models\Vehiculo\AtributoVersion', 
    		'version_id',
    		'id'
    	);
    }

    public function modelo(){
    	return $this->belongsTo(
    		'App\Models\Vehiculo\Modelo', 
    		'modelo_id',
    		'id'
    	);
    }

    public function tipo_combustible_info(){
        return $this->hasOne(
            'App\Models\Vehiculo\TipoCombustible', 
            'id',
            'tipo_combustible'
        );
    }
}
