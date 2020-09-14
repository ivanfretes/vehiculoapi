<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo\Modelo;
use Database\Factories\VersionFactory;
use App\Models\Vehiculo\Version;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Version::truncate();

    	$vFactory = new VersionFactory;
    	$vFactory->count(80)->create();
    }
}
