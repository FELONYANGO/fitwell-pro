<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $trainer = Auth::user();
        $clients = User::whereHas('clientPrograms.program', function ($q) use ($trainer) {
            $q->where('trainer_id', $trainer->id);
        })->get();

        return view('trainer.clients.index', compact('clients'));
    }
}
