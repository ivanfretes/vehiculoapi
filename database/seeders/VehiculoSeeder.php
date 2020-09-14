<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MarcaSeeder::class);
        $this->call(ModeloSeeder::class);
        $this->call(TipoCombustibleSeeder::class);
        $this->call(VersionSeeder::class);
        $this->call(AtributoVersionSeeder::class);
    }
}
