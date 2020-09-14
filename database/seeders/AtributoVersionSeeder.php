<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo\AtributoVersion;
use App\Models\Vehiculo\Atributo;

class AtributoVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Ejemplo de atributos que podrian cargar el administrador
    	$atributos = [
    		'Diametro de Ruedas',
    		'Cant. de Puertas',
    		'Largo',
            'Ancho',
            'Alto',
            'Kilometros en la Ciudad',
            'Nro de Cilindros',
            'Capacidad del Tange',
            'Aceleración de 0 a 100 '
    	];

    	Atributo::truncate();
        foreach ($atributos as $atributo) {
            Atributo::create(['nombre' => $atributo]);
        }


        AtributoVersion::truncate();
        AtributoVersion::create([
            'atributo_id' => 1, // Para este caso por ejemplo diametro de ruedas
            'version_id' => 1,
            'valor' => 20
        ]);

        AtributoVersion::create([
            'atributo_id' => 3, // Para este caso por ejemplo diametro de ruedas
            'version_id' => 1,
            'valor' => '4256 mm'
        ]);

        AtributoVersion::create([
            'atributo_id' => 6, 
            'version_id' => 5,
            'valor' => '6.7 litros'
        ]);

        AtributoVersion::create([
            'atributo_id' => 9,
            'version_id' => 1,
            'valor' => '3.4 segundos'
        ]);
    }
}
