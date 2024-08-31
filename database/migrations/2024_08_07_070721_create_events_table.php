<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('category');
            $table->string('tag');
            $table->string('img');
            $table->string('eventImg');
            $table->integer('price');
            $table->integer('offPrice');
            $table->string('location');
            $table->string('time');
            $table->string('badgeDate');
            $table->string('badgeYear');
            $table->string('desc');
            $table->string('descTwo');
            $table->string('userId')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
