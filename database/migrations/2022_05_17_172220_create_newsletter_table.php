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
        Schema::create('nieuwsbrieven', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('afzender');
            $table->string('email')->unique();
            $table->foreignId('template_id');
            $table->enum('leesbevestiging', ['nee', 'ja']);
            $table->date('created_at');
            $table->datetime('verzenddatum')->nullable();
            $table->foreignId('contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nieuwsbrieven');
    }
};
