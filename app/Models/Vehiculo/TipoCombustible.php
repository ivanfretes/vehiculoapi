<?php

namespace App\Models\Vehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCombustible extends Model
{
    use HasFactory;

    protected $table = 'vehiculo_tipo_combustible';
    protected $fillable = ['nombre_tipo'];
}
