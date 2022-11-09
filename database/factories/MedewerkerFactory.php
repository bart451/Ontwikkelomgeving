<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medewerker>
 */
class MedewerkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique(true)->numberBetween(1, 10000000),
            'naam' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
            'telefoon' => $this->faker->unique(true)->numberBetween(1, 10000000),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
