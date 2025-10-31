<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// Registration
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Logout (must be POST)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Dashboard - Role-based redirect
    Route::get('/dashboard', function() {
        $user = Auth::user();

        if ($user->isTrainer()) {
            return redirect()->route('trainer.dashboard');
        }
        else {
            return redirect()->route('client.dashboard');
        }
    })->name('dashboard');

    // Profile completion (for social login users)
    Route::get('/profile/complete', [AuthController::class, 'showProfileCompletion'])->name('profile.complete');
    Route::post('/profile/complete', [AuthController::class, 'completeProfile'])->name('profile.complete.post');

    // Notifications
    Route::prefix('notifications')->name('notifications.')->controller(NotificationController::class)->group(function () {
        Route::get('/', 'showNotificationsPage')->name('index');
        Route::get('/all', 'getAll')->name('all');
        Route::get('/unread-count', 'unreadCount')->name('unread-count');
        Route::get('/{id}', 'show')->name('show');
        Route::patch('/{id}/read', 'markAsRead')->name('mark-read');
        Route::post('/{id}/read', 'markAsRead')->name('mark-read.post');
        Route::patch('/mark-all-read', 'markAllAsRead')->name('mark-all-read');
        Route::post('/mark-all-read', 'markAllAsRead')->name('mark-all-read.post');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::delete('/delete-all', 'deleteAll')->name('delete-all');
    });
});
