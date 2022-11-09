<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedewerkerNieuwsbrief>
 */
class MedewerkerNieuwsbriefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => 1,
            'medewerker_id' => 1,
            'nieuwsbrief_id' => 1,
        ];
    }
}
