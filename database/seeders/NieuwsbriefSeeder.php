<?php

namespace Database\Seeders;

use App\Models\Nieuwsbrief;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NieuwsbriefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max = 1;
        for($c=1; $c<=$max; $c++) {
            Nieuwsbrief::factory()->create();
        }

//        \App\Models\Nieuwsbrief::factory(11)->create();
    }
}


