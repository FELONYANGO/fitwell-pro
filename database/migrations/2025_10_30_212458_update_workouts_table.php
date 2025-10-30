<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     public function up()
    {
        Schema::table('workouts', function (Blueprint $table) {

            // ✅ 1. Drop foreign key if exists before dropping `user_id`
            if (Schema::hasColumn('workouts', 'user_id')) {
                try {
                    $table->dropForeign(['user_id']);
                } catch (\Exception $e) {
                    // Ignore if foreign key name is custom or already dropped
                }
            }

            // ✅ 2. Drop unnecessary columns (only if they exist)
            $dropColumns = [
                'user_id', 'type', 'difficulty', 'duration_minutes',
                'calories_burned', 'met_value', 'workout_date', 'start_time',
                'end_time', 'status', 'week_number', 'notes'
            ];

            foreach ($dropColumns as $col) {
                if (Schema::hasColumn('workouts', $col)) {
                    $table->dropColumn($col);
                }
            }

            // ✅ 3. Rename column safely
            if (Schema::hasColumn('workouts', 'name')) {
                $table->renameColumn('name', 'title');
            }

            // ✅ 4. Add MVP columns if missing
            if (!Schema::hasColumn('workouts', 'day_number')) {
                $table->integer('day_number')->after('program_id');
            }

            if (!Schema::hasColumn('workouts', 'video_link')) {
                $table->string('video_link')->nullable()->after('description');
            }
        });
    }

    public function down()
    {
        Schema::table('workouts', function (Blueprint $table) {
            if (Schema::hasColumn('workouts', 'title')) {
                $table->renameColumn('title', 'name');
            }
        });
    }
};
