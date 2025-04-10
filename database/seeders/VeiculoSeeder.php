<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Veiculo;

class VeiculoSeeder extends Seeder
{
    public function run(): void
    {
        Veiculo::factory()->count(10)->create();
    }
}
