
@extends('layouts.auth')

@section('title', 'Login - FitWell Pro')

@section('auth-switch')
    New to FitWell Pro?
    <a href="{{ route('register') }}" class="font-medium text-green-600 hover:text-green-500">Create an account</a>
@endsection

@section('content')
<div class="flex-1 flex items-center justify-center py-8 px-4 sm:px-6 lg:px-8 lg:py-12">
    <div class="max-w-md w-full space-y-6 lg:space-y-8">
        <div class="text-center lg:text-left">
            <h2 class="text-3xl font-bold text-gray-900">Welcome back</h2>
            <p class="mt-2 text-gray-600 text-sm sm:text-base">Sign in to your FitWell Pro account</p>
        </div>

        <div class="bg-white py-8 px-6 shadow-xl rounded-xl border border-gray-100">
            <form class="space-y-6" method="POST" action="{{ route('login') }}">
                @csrf

                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                        <h3 class="text-sm font-semibold text-red-800">Login failed</h3>
                        <ul class="mt-1 text-sm text-red-700">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" required
                        value="{{ old('email') }}"
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-sm sm:text-base"
                        placeholder="Enter your email">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-500 text-sm sm:text-base"
                        placeholder="Enter your password">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <div>
                        <input type="checkbox" id="remember" name="remember" class="text-green-600 rounded border-gray-300">
                        <label for="remember" class="ml-2 text-gray-700">Remember me</label>
                    </div>
                    <a href="#" class="text-green-600 hover:text-green-500 font-medium">Forgot password?</a>
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-green-600 to-teal-600 text-white py-3 rounded-lg font-semibold hover:shadow-lg transition">
                    Sign In
                </button>
            </form>
        </div>

        <p class="text-center text-sm text-gray-600">
            Don’t have an account?
            <a href="{{ route('register') }}" class="font-medium text-green-600 hover:text-green-500">Sign up for free</a>
        </p>
    </div>
</div>

<!-- Right side image/hero -->
<div class="hidden lg:flex lg:flex-1 relative overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
         style="background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&w=2070&q=80');">
    </div>
    <div class="absolute inset-0 bg-gradient-to-br from-green-600/90 to-teal-700/90"></div>
    <div class="relative flex-1 flex flex-col justify-center items-center px-8 text-white z-10">
        <h2 class="text-3xl font-bold mb-4">Welcome Back to Your Fitness Journey</h2>
        <p class="text-green-100 text-base mb-6">Track progress, stay motivated, and achieve results with FitWell Pro.</p>
    </div>
</div>
@endsection
