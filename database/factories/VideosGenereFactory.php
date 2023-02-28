<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideosGenereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idVideoVG' => $this->faker->numberBetween(1,50),
            'idGenereVG' => $this->faker->numberBetween(1,7),
        ];
    }
}
