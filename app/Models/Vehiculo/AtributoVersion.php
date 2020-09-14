<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtributoVersion extends Model
{
    use HasFactory;

    protected $table = 'atributo_version';
    protected  $fillable = ['valor'];

    public function atributo_personalizado(){
    	return $this->belongsTo(
    		'App\Models\Vehiculo\Atributo', 
    		'atributo_id',
    		'id'
    	);
    }
}
