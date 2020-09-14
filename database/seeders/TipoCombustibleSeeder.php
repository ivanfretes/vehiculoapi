<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo\TipoCombustible;

class TipoCombustibleSeeder extends Seeder
{

	protected $tipo_combustible = [
		'Gas',
		'Acetileno',
		'Propano',
		'Gasolina',
		'Butano',
		'Diésel',
		'Fueloil',
		'Antracita',
		'Coque',
		'Alcohol',
		'Lignito',
		'Turba',
		'Hulla',
	];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	TipoCombustible::truncate();
     	foreach ($this->tipo_combustible as $tipo) {
     	   	TipoCombustible::create(['nombre_tipo' => $tipo]);
     	}   
    }
}
