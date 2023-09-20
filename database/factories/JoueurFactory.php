<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'firstname' => $this->faker->firstname(),
            'position' => $this->faker->word(),
            'photo' => $this->faker->imageUrl(640, 480, 'animals', true),
            'equipe_id' => $this->faker->numberBetween(1,4),
        ];
    }
}
