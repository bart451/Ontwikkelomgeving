<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
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
            $table->string('afzender')->nullable();;
            $table->string('email')->unique();
            $table->enum('leesbevestiging', ['nee', 'ja'])->nullable();;
            $table->datetime('verzenddatum')->nullable();
            $table->datetime('verzondendatum')->nullable();
            $table->enum('status', ['Nieuw', 'Wachtrij', 'Verzonden']);
            $table->foreignId('template_id')->references('id')->on('templates')->onDelete('cascade');
            $table->text('inhoud')->nullable();;
            $table->string('created_by')->nullable();;
            $table->datetime('created_at');
            $table->datetime('updated_at');
            $table->datetime('deleted_at')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nieuwsbriefs');
    }
};
