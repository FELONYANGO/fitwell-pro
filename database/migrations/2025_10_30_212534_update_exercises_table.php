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
        Schema::table('exercises', function (Blueprint $table) {
            // Drop unused columns
            $table->dropColumn([
                'description',
                'category',
                'muscle_groups',
                'equipment_needed',
                'instructions',
                'calories_per_minute',
                'image_url',
            ]);

            // Add new MVP fields
            if (!Schema::hasColumn('exercises', 'workout_id')) {
                $table->foreignId('workout_id')->after('id')->constrained('workouts')->onDelete('cascade');
            }

            $table->string('body_part')->nullable()->after('name');
            $table->integer('sets')->default(3)->after('body_part');
            $table->integer('reps')->default(10)->after('sets');
            $table->string('duration')->nullable()->after('reps');
            $table->string('rest_period')->nullable()->after('duration');
            $table->text('notes')->nullable()->after('rest_period');

            // Rename video_url → keep if used for video demos
        });
    }

    public function down()
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->dropColumn(['workout_id','body_part','sets','reps','duration','rest_period','notes']);
        });
    }
};
