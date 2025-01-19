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
        Schema::create('gecmis_maclar', function (Blueprint $table) {
            $table->id();
            $table->string('takim_1_name');
            $table->string('takim_2_name');
            $table->integer('takim_1_score');
            $table->integer('takim_2_score');
            $table->string('tarih');
            $table->string('takim_1_logo');
            $table->string('takim_2_logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gecmis_maclar');
    }
};
