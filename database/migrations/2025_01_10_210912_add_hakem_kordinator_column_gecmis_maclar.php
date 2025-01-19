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
        Schema::table('gecmis_maclar', function (Blueprint $table) {
            $table->string('hakem');
            $table->string('kordinator');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gecmis_maclar', function (Blueprint $table) {
            $table->dropColumn('hakem');
            $table->dropColumn('kordinator');
        });
    }
};


