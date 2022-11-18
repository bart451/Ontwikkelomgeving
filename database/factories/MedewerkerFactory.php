<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nieuwsbrief\Medewerker>
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
        static $number = 1;
        return [
            'id' => $number++,
            'naam' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
            'telefoon' => $this->faker->unique(true)->numberBetween(1, 10000000),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
