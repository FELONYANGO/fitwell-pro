<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with('trainer')->paginate(10);
        return view('client.programs.index', compact('programs'));
    }

    public function show($id)
    {
        $program = Program::with('trainer', 'workouts')->findOrFail($id);
        return view('client.programs.show', compact('program'));
    }

    public function join($id)
    {
        $program = Program::findOrFail($id);
        $client = Auth::user();

        $client->clientPrograms()->syncWithoutDetaching([$program->id => [
            'start_date' => now(),
            'progress' => 0,
            'status' => 'active'
        ]]);

        return redirect()->route('client.dashboard')->with('success', 'Successfully joined the program!');
    }
}
