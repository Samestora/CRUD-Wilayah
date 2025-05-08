<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wilayah;

class WilayahSeeder extends Seeder
{
    public function run(): void
    {
        Wilayah::factory()->count(40)->create();
    }
}
