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
        Schema::create('puan_durumu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('takim_id');
            $table->string('o');
            $table->string('g');
            $table->string('b');
            $table->string('m');
            $table->string('a');
            $table->string('y');
            $table->string('av');
            $table->string('p');
            $table->string('bn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puan_durumu');
    }
};
