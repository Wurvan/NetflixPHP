<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\map;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'creationDate' => $this->faker->date(),
            'sinopsis' => 'sinposis',
            'duration' => $this->faker->numberBetween(1,600),
            'file' => 'videos/arcanew.mp4',
            'tipo' => 'serie',
            'episode' => $this->faker->numberBetween(1,10),
            'season' => $this->faker->numberBetween(1,6),
            'imageFilm' => $this->faker->imageUrl($width = 320, $height = 240,null,false,' ')
        ];
    }
}
