<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'tipo_acesso' => $this->faker->numberBetween(0, 1),
            'cpf' => $this->faker->numerify('###########'), // 11 dígitos
            'telefone' => $this->faker->numerify('###########'), // 11 dígitos
            'senha' => Hash::make('senha123'), // senha padrão para todos
        ];
    }
}
