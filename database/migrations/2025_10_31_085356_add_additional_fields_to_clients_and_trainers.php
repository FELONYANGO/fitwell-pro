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
        Schema::table('clients', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('fitness_level')->nullable();
            $table->string('activity_level')->nullable();
        });

        Schema::table('trainers', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->decimal('hourly_rate', 8, 2)->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn(['gender', 'age', 'fitness_level', 'activity_level']);
        });

        Schema::table('trainers', function (Blueprint $table) {
            $table->dropColumn(['gender', 'hourly_rate']);
        });
    }
};
