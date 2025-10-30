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
        Schema::table('users', function (Blueprint $table) {

            // Drop old unnecessary columns
            $table->dropColumn([
                'username',
                'email_verified_at',
                'gender',
                'age',
                'height',
                'weight',
                'fitness_level',
                'activity_level',
                'fitness_goals',
                'profile_picture',
                'preferences',
                'provider_id',
                'provider_name',
                'provider_token',
                'needs_profile_completion',
                'stripe_id',
                'pm_type',
                'pm_last_four',
                'trial_ends_at',
                'user_type',
            ]);

            // Rename 'name' column to keep consistency
            $table->string('name')->nullable(false)->change();

            // Add phone, role, and status
            $table->string('phone')->nullable()->after('password');
            $table->enum('role', ['admin', 'trainer', 'client'])->default('client')->after('phone');
            $table->enum('status', ['active', 'inactive'])->default('active')->after('role');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            // Rollback: add dropped columns back (minimal version)
            $table->enum('user_type', ['client', 'trainer', 'admin'])->default('client');
            $table->string('username')->unique()->nullable();
            $table->integer('age')->nullable();
            $table->decimal('height', 5, 2)->nullable();
            $table->decimal('weight', 5, 2)->nullable();
            $table->enum('fitness_level', ['beginner','intermediate','advanced'])->nullable();
            $table->enum('activity_level', ['sedentary','lightly_active','moderately_active','very_active','extremely_active'])->default('moderately_active');
            $table->text('fitness_goals')->nullable();
            $table->string('profile_picture')->nullable();
            $table->json('preferences')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('provider_name')->nullable();
            $table->text('provider_token')->nullable();
            $table->boolean('needs_profile_completion')->default(false);
            $table->string('stripe_id')->nullable();
            $table->string('pm_type')->nullable();
            $table->string('pm_last_four', 4)->nullable();
            $table->timestamp('trial_ends_at')->nullable();

            // Drop new columns
            $table->dropColumn(['phone', 'role', 'status']);
        });
    }
};
