<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nieuwsbrief>
 */
class NieuwsbriefFactory extends Factory
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
            'afzender' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'leesbevestiging' => $this->faker->randomElement(['ja', 'nee']),
            'verzenddatum' => $this->faker->dateTime(),
            'verzondendatum' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(['nieuw', 'wachtrij', 'verzonden']),
            'template_id' => 1,
            'inhoud' => $this->faker->paragraph,
            'created_by' => $this->faker->firstName,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
