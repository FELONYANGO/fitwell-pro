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
        // Rename existing table
        Schema::rename('trainer_profiles', 'trainers');

        Schema::table('trainers', function (Blueprint $table) {
            // Drop unused or overly detailed columns (optional)
            $table->dropColumn([
                'certifications',
                'specializations',
                'education',
                'approach_description',
                'business_name',
                'business_address',
                'business_phone',
                'business_email',
                'website_url',
                'social_media_links',
                'hourly_rate',
                'package_rates',
                'availability_schedule',
                'max_clients',
                'current_clients',
                'accepting_new_clients',
                'training_locations',
                'cancellation_policy',
                'status',
                'verified_at'
            ]);

            // Rename and align with new schema
            $table->renameColumn('years_experience', 'experience_years');
            $table->renameColumn('bio', 'bio');

            // Add/replace fields you want for MVP
            if (!Schema::hasColumn('trainers', 'specialization')) {
                $table->string('specialization')->after('user_id')->nullable();
            }
            if (!Schema::hasColumn('trainers', 'certification')) {
                $table->string('certification')->after('specialization')->nullable();
            }
            if (!Schema::hasColumn('trainers', 'availability')) {
                $table->json('availability')->after('bio')->nullable();
            }
        });
    }

    public function down(): void
    {
        // Reverse migration (rename back and restore dropped columns)
        Schema::rename('trainers', 'trainer_profiles');
    }
};
