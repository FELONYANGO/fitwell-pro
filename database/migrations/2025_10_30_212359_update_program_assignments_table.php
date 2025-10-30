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
        Schema::table('program_assignments', function (Blueprint $table) {

            // ✅ Drop foreign keys before dropping their columns
            if (Schema::hasColumn('program_assignments', 'approved_by')) {
                try {
                    $table->dropForeign(['approved_by']); // drops the FK constraint
                } catch (\Exception $e) {
                    // Ignore if the FK name is different
                }
            }

            // ✅ Drop unneeded columns (only if they exist)
            $dropColumns = [
                'assigned_date', 'approved_at', 'approved_by', 'approval_notes',
                'payment_deadline', 'payment_reminder_sent_at', 'customizations',
                'notes', 'completed_at', 'current_week', 'current_session'
            ];

            foreach ($dropColumns as $col) {
                if (Schema::hasColumn('program_assignments', $col)) {
                    $table->dropColumn($col);
                }
            }

            // ✅ Add MVP columns if missing
            if (!Schema::hasColumn('program_assignments', 'progress')) {
                $table->decimal('progress', 5, 2)->default(0)->after('end_date');
            }

            // ✅ Simplify status enum
            if (Schema::hasColumn('program_assignments', 'status')) {
                $table->enum('status', ['active', 'completed', 'paused'])->default('active')->change();
            }
        });
    }

    public function down()
    {
        Schema::table('program_assignments', function (Blueprint $table) {
            // Restore full enum if rollback
            if (Schema::hasColumn('program_assignments', 'status')) {
                $table->enum('status', [
                    'pending', 'active', 'completed', 'paused',
                    'cancelled', 'rejected', 'deactivated',
                    'pending_payment', 'withdrawn'
                ])->change();
            }
        });
    }
};
