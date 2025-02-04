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
        Schema::create('takim', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('deger')->nullable();
            $table->date('kurulus_tarihi');
            $table->string('kaptan');
            $table->string('logo');
            $table->foreignId('kadro_id')->nullable();
            $table->string('degerli_oyuncu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('takim');
    }
};
