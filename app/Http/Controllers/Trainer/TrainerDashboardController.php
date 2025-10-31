<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TrainerDashboardController extends Controller
{
   
    public function index()
    {
        $trainer = Auth::user();

        // ✅ Get all programs this trainer created
        $programs = $trainer->trainerPrograms()->with('clients')->get();

        // ✅ Dashboard stats
        $activeProgramsCount = $programs->where('status', 'active')->count();
        $clientsCount = $programs->flatMap->clients->unique('id')->count(); // count unique clients across all programs
        $earnings = $programs->sum('price'); // adjust if you have actual payments table

        return view('trainer.dashboard', compact(
            'programs',
            'activeProgramsCount',
            'clientsCount',
            'earnings'
        ));
    }
}
