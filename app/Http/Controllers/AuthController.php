<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Client;
use App\Models\Trainer;


class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // ✅ Validate input
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6'],
            'user_type' => ['required', 'in:client,trainer'],
        ]);

        // ✅ Create base user
        $user = User::create([
            'name' => trim($request->first_name . ' ' . $request->last_name),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone ?? null,
            'role' => $request->user_type,
            'status' => 'active',
        ]);

        // ✅ Create profile based on type
        if ($request->user_type === 'client') {
            Client::create([
                'user_id' => $user->id,
                'height' => $request->height,
                'weight' => $request->weight,
                'fitness_goal' => $request->fitness_goals,
                'gender' => $request->gender,
                'age' => $request->age,
                'fitness_level' => $request->fitness_level,
                'activity_level' => $request->activity_level,
            ]);
        } else {
            Trainer::create([
                'user_id' => $user->id,
                'specialization' => $request->specializations,
                'certification' => $request->certification ?? null,
                'bio' => $request->bio,
                'availability' => json_encode([]),
                'experience_years' => $request->years_experience ?? 0,
                'gender' => $request->gender,
                'hourly_rate' => $request->hourly_rate ?? null,
            ]);
        }

         Auth::login($user);

    // ✅ Role-based redirect
    return $user->role === 'trainer'
        ? redirect()->route('trainer.dashboard')->with('success', 'Welcome Trainer!')
        : redirect()->route('client.dashboard')->with('success', 'Welcome Client!');

    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        $user = Auth::user();
        // ✅ Redirect based on role
        return $user->role === 'trainer'
            ? redirect()->route('trainer.dashboard')
            : redirect()->route('client.dashboard');
    }

    return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
