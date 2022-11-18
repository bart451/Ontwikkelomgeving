<?php

namespace Database\Factories;

use App\Models\Nieuwsbrief\Template;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nieuwsbrief\Template>
 */
class TemplateFactory extends Factory
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
            'inhoud' => $this->faker->paragraph,
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
