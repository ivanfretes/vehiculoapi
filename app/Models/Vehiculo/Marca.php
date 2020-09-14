<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $table = 'vehiculo_marca';
    protected $fillable = ['nombre_marca'];
    
    public function modelos(){
    	return $this->hasMany('App\Models\Modelo', $marca_id, $id);
    }

}
