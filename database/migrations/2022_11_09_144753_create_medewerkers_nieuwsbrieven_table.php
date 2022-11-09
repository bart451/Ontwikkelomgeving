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
            $table->foreignId('medewerker_id')->references('id')->on('medewerkers')->onDelete('cascade');
            $table->foreignId('nieuwsbrief_id')->references('id')->on('nieuwsbrieven')->onDelete('cascade');
            $table->datetime('updated_at');
            $table->datetime('created_at');
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
