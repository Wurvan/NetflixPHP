<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idVideoF' => $this->faker->numberBetween(1,51),
            'idUserF' => $this->faker->numberBetween(1,11),
        ];
    }
}
