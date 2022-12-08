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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->string('location')->nullable();
            $table->timestamp('registration_open')->nullable();
            $table->timestamp('registration_close')->nullable();
            $table->timestamp('event_start')->nullable();
            $table->timestamp('event_end')->nullable();
            $table->string('image')->nullable();
            $table->integer('max_participants')->nullable();
            $table->enum('status', ['draft', 'published', 'booked', 'cancelled']);
            $table->enum('category', ['online', 'offline']);
            $table->foreignId('user_id')->constrained('users');
            $table->string('game');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
