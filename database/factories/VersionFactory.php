<?php

namespace Database\Factories;

use App\Models\Vehiculo\Version;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VersionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Version::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_version' => $this->faker->lastName,
            'precio' => $this->faker->numberBetween(15700,50000),
            'cilindraje' => $this->faker->numberBetween(1500,5500),
            'modelo_id'=>  $this->faker->numberBetween(1,48),
            'tipo_combustible' => $this->faker->numberBetween(1,14),
            'bluetooth' => $this->faker->randomElement(['no', 'si']),
            'velocidad_automatica' => $this->faker->numberBetween(160,250),
        ];
    }
}
