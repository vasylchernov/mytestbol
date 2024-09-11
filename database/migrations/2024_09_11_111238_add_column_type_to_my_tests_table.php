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
        Schema::table('my_tests', function (Blueprint $table) {
            $table->string('type')->default('ex'); // Add the new column with default 'ex'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('my_tests', function (Blueprint $table) {
            $table->dropColumn('type'); // Drop the column if rolled back
        });
    }
};
