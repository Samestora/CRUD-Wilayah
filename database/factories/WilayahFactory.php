<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WilayahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_wilayah' => $this->faker->city,
            'kode_pos' => $this->faker->postcode,
            'keterangan' => $this->faker->sentence,
        ];
    }
}
