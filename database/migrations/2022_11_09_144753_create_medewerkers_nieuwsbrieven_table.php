<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medewerker_nieuwsbrief', function (Blueprint $table) {
            $table->id();
            $table->integer('nieuwsbrief_id')->unsigned();
            $table->integer('medewerker_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medewerkers_nieuwsbrieven');
    }
};
