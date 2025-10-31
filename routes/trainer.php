<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trainer\TrainerDashboardController;
use App\Http\Controllers\Trainer\ProgramController;
use App\Http\Controllers\Trainer\WorkoutController;
use App\Http\Controllers\Trainer\ClientController;
use App\Http\Controllers\Trainer\EarningController;

Route::middleware(['web', 'auth', 'role:trainer'])->prefix('trainer')->name('trainer.')->group(function () {

    Route::get('/dashboard', [TrainerDashboardController::class, 'index'])->name('dashboard');

    // Programs
    Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
    Route::get('/programs/create', [ProgramController::class, 'create'])->name('programs.create');
    Route::post('/programs', [ProgramController::class, 'store'])->name('programs.store');
    Route::get('/programs/{program}/edit', [ProgramController::class, 'edit'])->name('programs.edit');
    Route::put('/programs/{program}', [ProgramController::class, 'update'])->name('programs.update');
    Route::delete('/programs/{program}', [ProgramController::class, 'destroy'])->name('programs.destroy');

    // Workouts
    Route::get('/programs/{program}/workouts', [WorkoutController::class, 'index'])->name('workouts.index');
    Route::get('/programs/{program}/workouts/create', [WorkoutController::class, 'create'])->name('workouts.create');
    Route::post('/programs/{program}/workouts', [WorkoutController::class, 'store'])->name('workouts.store');

    // Clients
    // Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients', function () {
        return view('trainer.clients.index');
    })->name('clients.index');
    // Reviews
Route::get('/reviews', function () {
    return view('trainer.reviews.index');
})->name('reviews.index');
// Reviews
Route::get('/reviews', function () {
    return view('trainer.reviews.index');
})->name('reviews.index');
    // Messages
    Route::get('/messages', function () {
        return view('trainer.messages.index');
    })->name('messages.index');
    // profile
    Route::get('/profile', function () {
        return view('trainer.profile.index');
    })->name('profile.index');  
    // Earnings
    // Route::get('/earnings', [EarningController::class, 'index'])->name('earnings.index');
});
