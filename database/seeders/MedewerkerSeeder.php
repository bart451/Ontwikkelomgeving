<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedewerkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max = 10;
        for($c=1; $c<=$max; $c++) {
            \App\Models\Medewerker::factory()->create();
        }    }
}
