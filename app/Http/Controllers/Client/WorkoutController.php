<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Workout;

class WorkoutController extends Controller
{
    public function show($id)
    {
        $workout = Workout::findOrFail($id);
        return view('client.workouts.show', compact('workout'));
    }
}
