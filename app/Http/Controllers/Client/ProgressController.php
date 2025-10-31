<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
{
    public function update(Request $request, $programId)
    {
        $client = Auth::user();
        $progress = $request->input('progress');

        $client->clientPrograms()->updateExistingPivot($programId, [
            'progress' => $progress,
        ]);

        return back()->with('success', 'Progress updated!');
    }
}
