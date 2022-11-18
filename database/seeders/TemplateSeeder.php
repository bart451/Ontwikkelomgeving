<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max = 3;
        for($c=1; $c<=$max; $c++) {
            \App\Models\Template::factory()->create();
        }
    }
}
