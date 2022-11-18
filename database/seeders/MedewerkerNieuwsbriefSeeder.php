<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedewerkerNieuwsbriefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max = 0;
        for ($c = 1; $c <= $max; $c++) {
            \App\Models\MedewerkerNieuwsbrief::factory()->create();
        }
    }
}
