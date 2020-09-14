<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$marcas = [
	        'AGRALE', 
			'ALFA ROMEO', 
			'AUDI', 
			'BMW', 
			'CHERY', 
			'CHEVROLET', 
			'CHRYSLER', 
			'CITROEN', 
			'DACIA', 
			'DAEWO', 
			'DAIHATSU', 
			'DODGE', 
			'FERRARI', 
			'FIAT', 
			'FORD', 
			'GALLOPER', 
			'HEIBAO', 
			'HONDA', 
			'HYUNDAI', 
			'ISUZU', 
			'JAGUAR', 
			'JEEP', 
			'KIA', 
			'LADA', 
			'LAND ROVER', 
			'LEXUS', 
			'MASERATI', 
			'MAZDA', 
			'MERCEDES BENZ', 
			'MG', 
			'MINI', 
			'MITSUBISHI', 
			'NISSAN', 
			'PEUGEOT', 
			'PORSCHE', 
			'RAM', 
			'RENAULT', 
			'ROVER', 
			'SAAB', 
			'SEAT', 
			'SMART', 
			'SSANGYONG', 
			'SUBARU', 
			'SUZUKI', 
			'TATA', 
			'TOYOTA', 
			'VOLKSWAGEN', 
			'VOLVO'
		];

		Marca::truncate();
		foreach ($marcas as $marca) {
			Marca::create(['nombre_marca' => $marca] );
		}

    }
}
