<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientDashboardController;
use App\Http\Controllers\Client\ProgramController;
use App\Http\Controllers\Client\WorkoutController;
use App\Http\Controllers\Client\PaymentController;
use App\Http\Controllers\Client\ProgressController;

Route::middleware(['web', 'auth', 'role:client'])->prefix('client')->name('client.')->group(function () {

    Route::get('/dashboard', [ClientDashboardController::class, 'index'])->name('dashboard');

    // Programs
    Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
    Route::get('/programs/{id}', [ProgramController::class, 'show'])->name('programs.show');
    Route::post('/programs/{id}/join', [ProgramController::class, 'join'])->name('programs.join');

    // Workouts
    Route::get('/workouts/{id}', [WorkoutController::class, 'show'])->name('workouts.show');

    // Payments
    // Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    // Route::post('/payments/{programId}', [PaymentController::class, 'store'])->name('payments.store');

    // Progress
    Route::post('/progress/{programId}', [ProgressController::class, 'update'])->name('progress.update');
});
