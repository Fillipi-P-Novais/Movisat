<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veiculo>
 */
class VeiculoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cor' => $this->faker->safeColorName(),
            'modelo' => $this->faker->word(),
            'placa' => strtoupper($this->faker->bothify('???####')), // Ex: ABC1234
            'id_empresa' => $this->faker->numberBetween(100, 999),
            'id_usuario' => $this->faker->numberBetween(100, 999),
        ];
    }
}
