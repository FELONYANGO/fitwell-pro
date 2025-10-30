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
        Schema::table('programs', function (Blueprint $table) {
            // ✅ Rename existing columns
            if (Schema::hasColumn('programs', 'name')) {
                $table->renameColumn('name', 'title');
            }

            if (Schema::hasColumn('programs', 'difficulty_level')) {
                $table->renameColumn('difficulty_level', 'level');
            }

            // ✅ Add missing columns if not exist
            if (!Schema::hasColumn('programs', 'type')) {
                $table->enum('type', ['fitness', 'nutrition', 'hybrid'])->default('fitness')->after('description');
            }

            // ✅ Change enum columns safely (only if they exist)
            if (Schema::hasColumn('programs', 'level')) {
                $table->enum('level', ['beginner', 'intermediate', 'advanced'])->default('beginner')->change();
            }

            if (Schema::hasColumn('programs', 'status')) {
                $table->enum('status', ['draft', 'published', 'archived'])->default('draft')->change();
            }

            // ✅ Drop unnecessary columns if they exist
            $dropColumns = [
                'program_category', 'program_subtype', 'sessions_per_week', 'meals_per_day',
                'goals', 'dietary_preferences', 'macros_target', 'calorie_target',
                'includes_meal_prep', 'includes_shopping_list', 'equipment_required',
                'is_public', 'max_clients', 'current_clients', 'price', 'is_free',
                'requires_approval', 'auto_approve_criteria', 'payment_deadline_hours',
                'refund_policy_days', 'notes',
            ];

            foreach ($dropColumns as $col) {
                if (Schema::hasColumn('programs', $col)) {
                    $table->dropColumn($col);
                }
            }
        });
    }

    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            if (Schema::hasColumn('programs', 'title')) {
                $table->renameColumn('title', 'name');
            }
            if (Schema::hasColumn('programs', 'level')) {
                $table->renameColumn('level', 'difficulty_level');
            }
        });
    }
};
