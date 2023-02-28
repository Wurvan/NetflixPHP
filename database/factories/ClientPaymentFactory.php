<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idPayment' => $this->faker->numberBetween(1,6),
            'idUserCP' => $this->faker->numberBetween(1,11),
        ];
    }
}
