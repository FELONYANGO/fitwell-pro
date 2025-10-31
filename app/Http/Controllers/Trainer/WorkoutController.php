<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Workout;
use App\Models\Program;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index(Program $program)
    {
        $workouts = $program->workouts;
        return view('trainer.workouts.index', compact('program', 'workouts'));
    }

    public function create(Program $program)
    {
        return view('trainer.workouts.create', compact('program'));
    }

    public function store(Request $request, Program $program)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'day' => 'required|integer|min:1|max:7',
            'video_url' => 'nullable|url'
        ]);

        $program->workouts()->create($request->all());

        return redirect()->route('trainer.workouts.index', $program)->with('success', 'Workout added!');
    }
}
