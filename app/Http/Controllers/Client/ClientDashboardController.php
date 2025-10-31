<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Program;

class ClientDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // ✅ Use the new relationship name: clientPrograms()
        $programs = $user->clientPrograms()
            ->with('trainer') // Eager-load trainer info if available
            ->get();

        // ✅ Optional fallback: show all programs if none assigned
        if ($programs->isEmpty()) {
            $programs = Program::with('trainer')->get();
        }

        return view('client.dashboard', compact('programs'));
    }
}
