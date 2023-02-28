<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idVideoH' => $this->faker->numberBetween(1,51),
            'idUserH' => $this->faker->numberBetween(1,11),
        ];
    }
}
