<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::where('trainer_id', Auth::id())->get();
        return view('trainer.programs.index', compact('programs'));
    }

    public function create()
    {
        return view('trainer.programs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'level' => 'required',
            'duration_weeks' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $data['trainer_id'] = Auth::id();

        Program::create($data);

        return redirect()->route('trainer.programs.index')->with('success', 'Program created successfully!');
    }

    public function edit(Program $program)
    {
        $this->authorize('update', $program);
        return view('trainer.programs.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $this->authorize('update', $program);

        $program->update($request->only(['title', 'description', 'level', 'duration_weeks', 'price']));

        return redirect()->route('trainer.programs.index')->with('success', 'Program updated!');
    }

    public function destroy(Program $program)
    {
        $this->authorize('delete', $program);
        $program->delete();

        return back()->with('success', 'Program deleted.');
    }
}
