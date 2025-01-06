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
        Schema::create('kadro_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('deger');
            $table->string('yas');
            $table->string('mevki');
            $table->integer('gol_sayisi');
            $table->foreignId('kadro_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kadro_member');
    }
};
