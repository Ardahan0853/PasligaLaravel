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
        Schema::table('haberler', function (Blueprint $table) {
            $table->dateTime('tarih')->nullable()->after('image'); // Replace 'some_existing_column' with the actual column name
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('haberler', function (Blueprint $table) {
            $table->dropColumn('tarih');
        });
    }
};
