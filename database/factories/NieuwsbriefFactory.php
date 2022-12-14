<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nieuwsbrief\Nieuwsbrief>
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
        static $number = 1;
        return [
            'id' => $number++,
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
