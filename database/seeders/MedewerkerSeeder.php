<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $max = 20;
        for($c=1; $c<=$max; $c++) {
            \App\Models\Medewerker::factory()->create();
        }    }
}
