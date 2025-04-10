<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cnpj' => $this->faker->numerify('##############'), // 14 dígitos
            'nome_fantasia' => $this->faker->company(),
            'email' => $this->faker->unique()->safeEmail(),
            'contato_responsavel' => $this->faker->numerify('###########'), // 11 dígitos
        ];
    }
}
