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
        Schema::create('mail_queue', function (Blueprint $table) {
            $table->id();
            $table->integer('mail_id')->nullable();;
            $table->string('mail_identifier')->nullable();;
            $table->text('to_address')->nullable();;
            $table->integer('from_user_id')->nullable();;
            $table->string('afzender')->nullable();;
            $table->string('from_address');
            $table->enum('leesbevestiging', ['nee', 'ja'])->nullable();;
            $table->integer('receive_receipt')->nullable();;
            $table->datetime('created_at');
            $table->string('create_by')->nullable();;
            $table->longtext('values')->nullable();;
            $table->enum('status', ['Nieuw', 'Wachtrij', 'Verzonden']);
            $table->datetime('verzenddatum')->nullable();;
            $table->string('naam')->nullable();;
            $table->longtext('inhoud')->nullable();;
            $table->integer('attachments_count')->nullable();;
            $table->datetime('updated_at')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_queue');
    }
};
