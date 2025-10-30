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
        Schema::create('progress_uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('program_id')->nullable()->constrained('programs')->onDelete('cascade');
            $table->enum('type', ['photo', 'video']);
            $table->string('file_path');
            $table->enum('category', [
                'form_check',
                'progress',
                'meal_prep',
                'check_in',
                'injury_assessment'
            ]);
            $table->integer('week')->nullable();
            $table->text('trainer_feedback')->nullable();
            $table->integer('rating')->nullable();
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('progress_uploads');
    }
};
