@extends('layouts.app')

@section('title', 'Trainer Dashboard')
@section('page_title', 'Trainer Dashboard')

@section('content')
            <!-- Welcome Section -->
                <div class="mb-8">
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">Good morning, Coach {{ Auth::user()->name }}! 💪</h2>
                    <p class="text-gray-600 mt-1">You have 5 pending video reviews and 3 new messages</p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-8">
                    <!-- Stat Card 1 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">+3</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Active Clients</h3>
                        <p class="text-3xl font-bold text-gray-900">28</p>
                        <p class="text-xs text-gray-500 mt-2">This month</p>
                    </div>

                    <!-- Stat Card 2 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-orange-600 bg-orange-50 px-2 py-1 rounded-full">Pending</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Video Reviews</h3>
                        <p class="text-3xl font-bold text-gray-900">5</p>
                        <p class="text-xs text-gray-500 mt-2">Need review</p>
                    </div>

                    <!-- Stat Card 3 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">+2</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Active Programs</h3>
                        <p class="text-3xl font-bold text-gray-900">12</p>
                        <p class="text-xs text-gray-500 mt-2">In progress</p>
                    </div>

                    <!-- Stat Card 4 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">4.9</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Avg Rating</h3>
                        <p class="text-3xl font-bold text-gray-900">4.9</p>
                        <p class="text-xs text-gray-500 mt-2">From 124 reviews</p>
                    </div>
                </div>

                <!-- Two Column Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Pending Video Reviews -->
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center space-x-2">
                                <h3 class="text-lg font-bold text-gray-900">Pending Video Reviews</h3>
                                <span class="bg-orange-100 text-orange-700 text-xs font-semibold px-2 py-1 rounded-full">5 New</span>
                            </div>
                            <a href="#" class="text-sm font-medium text-green-600 hover:text-green-700">View All</a>
                        </div>

                        <div class="space-y-4">
                            <!-- Video Review Card -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-orange-300 transition cursor-pointer">
                                <div class="flex items-start space-x-4">
                                    <div class="w-24 h-20 bg-gray-200 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-8 h-8 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start justify-between mb-2">
                                            <div>
                                                <h4 class="font-semibold text-gray-900">Sarah Miller - Squat Form Check</h4>
                                                <p class="text-sm text-gray-500">Uploaded 2 hours ago</p>
                                            </div>
                                            <span class="text-xs font-semibold bg-orange-100 text-orange-700 px-3 py-1 rounded-full whitespace-nowrap">Review</span>
                                        </div>
                                        <p class="text-sm text-gray-600 mb-3">Client notes: "Feeling some knee pain during depth. Need form feedback."</p>
                                        <button class="text-sm font-medium text-green-600 hover:text-green-700">Review Video →</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Video Review Card -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-orange-300 transition cursor-pointer">
                                <div class="flex items-start space-x-4">
                                    <div class="w-24 h-20 bg-gray-200 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-8 h-8 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start justify-between mb-2">
                                            <div>
                                                <h4 class="font-semibold text-gray-900">John Davis - Deadlift PR Attempt</h4>
                                                <p class="text-sm text-gray-500">Uploaded 5 hours ago</p>
                                            </div>
                                            <span class="text-xs font-semibold bg-orange-100 text-orange-700 px-3 py-1 rounded-full whitespace-nowrap">Review</span>
                                        </div>
                                        <p class="text-sm text-gray-600 mb-3">Client notes: "Hit 140kg! Please check my form."</p>
                                        <button class="text-sm font-medium text-green-600 hover:text-green-700">Review Video →</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-6">Quick Actions</h3>
                        <div class="space-y-3">
                            <button class="w-full flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-teal-50 rounded-lg hover:from-green-100 hover:to-teal-100 transition group">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-teal-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                        </svg>
                                    </div>
                                    <span class="font-medium text-gray-900">Create Program</span>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-green-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>

                            <button class="w-full flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition group">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                        </svg>
                                    </div>
                                    <span class="font-medium text-gray-900">Add New Client</span>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>

                            <button class="w-full flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition group">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                        </svg>
                                    </div>
                                    <span class="font-medium text-gray-900">View Analytics</span>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>

                        <div class="mt-6 p-4 bg-gradient-to-br from-green-50 to-teal-50 rounded-lg border border-green-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-gray-900 mb-1">Pro Tip</h4>
                                    <p class="text-xs text-gray-600">Review client videos within 24 hours to keep engagement high!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Clients & Schedule -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Recent Client Activity -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-6">Recent Client Activity</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100 last:border-0">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center text-white font-semibold flex-shrink-0">
                                    SM
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900">Sarah Miller completed <span class="text-green-600">Leg Day Workout</span></p>
                                    <p class="text-xs text-gray-500 mt-1">15 minutes ago</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100 last:border-0">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-400 to-teal-500 flex items-center justify-center text-white font-semibold flex-shrink-0">
                                    JD
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900">John Davis uploaded <span class="text-orange-600">progress video</span></p>
                                    <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100 last:border-0">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-400 to-red-500 flex items-center justify-center text-white font-semibold flex-shrink-0">
                                    EJ
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900">Emma Johnson reached <span class="text-purple-600">weight goal</span></p>
                                    <p class="text-xs text-gray-500 mt-1">3 hours ago</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100 last:border-0">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center text-white font-semibold flex-shrink-0">
                                    MT
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900">Mike Thompson sent you a <span class="text-blue-600">message</span></p>
                                    <p class="text-xs text-gray-500 mt-1">5 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Schedule -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-bold text-gray-900">Today's Schedule</h3>
                            <button class="text-sm font-medium text-green-600 hover:text-green-700">View Calendar</button>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4 p-4 bg-green-50 rounded-lg border border-green-100">
                                <div class="flex-shrink-0">
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-green-600">10</p>
                                        <p class="text-xs text-gray-500">AM</p>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-semibold text-gray-900 mb-1">1-on-1 Session with Sarah Miller</h4>
                                    <p class="text-xs text-gray-600 mb-2">Personal Training • 60 min</p>
                                    <div class="flex space-x-2">
                                        <button class="text-xs font-medium text-green-600 hover:text-green-700">Start Session</button>
                                        <button class="text-xs font-medium text-gray-600 hover:text-gray-700">Reschedule</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg">
                                <div class="flex-shrink-0">
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-gray-600">2</p>
                                        <p class="text-xs text-gray-500">PM</p>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-semibold text-gray-900 mb-1">Group Class - HIIT Training</h4>
                                    <p class="text-xs text-gray-600 mb-2">8 participants • 45 min</p>
                                    <button class="text-xs font-medium text-gray-600 hover:text-gray-700">View Details</button>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg">
                                <div class="flex-shrink-0">
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-gray-600">4</p>
                                        <p class="text-xs text-gray-500">PM</p>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-semibold text-gray-900 mb-1">Client Check-in: John Davis</h4>
                                    <p class="text-xs text-gray-600 mb-2">Video Call • 30 min</p>
                                    <button class="text-xs font-medium text-gray-600 hover:text-gray-700">Join Call</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
