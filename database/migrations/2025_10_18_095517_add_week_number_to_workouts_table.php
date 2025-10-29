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
         Schema::table('workouts', function (Blueprint $table) {
        if (!Schema::hasColumn('workouts', 'week_number')) {
            $table->integer('week_number')->after('status');
        }
    });;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('workouts', function (Blueprint $table) {
            //
            $table->dropColumn(['week_number', 'day']);
        });
    }
};
