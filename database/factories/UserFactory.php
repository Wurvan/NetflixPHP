<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password, // password
            'surname' => $this->faker->lastName(),
        ];
        /**
         * 'hash' => 'a',
         * 'tipo' => 'clients',    
            'profileImg' => '/img/profile.jpeg',
            'auth' => true,
            'block' =>  false,
            'creditCard' => $this->faker->creditCardNumber,
            'cvv' => $this->faker->numberBetween(100,999),
         */
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
