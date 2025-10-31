@extends('layouts.app')

@section('title', 'Client Dashboard')
@section('page_title', 'Dashboard')

@section('content')


                <div class="mb-8">
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">Welcome back, {{ Auth::user()->name }}! 👋</h2>
                    <p class="text-gray-600 mt-1">Here's your fitness progress overview</p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-8">
                    <!-- Stat Card 1 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">+12%</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Workouts Completed</h3>
                        <p class="text-3xl font-bold text-gray-900">24</p>
                        <p class="text-xs text-gray-500 mt-2">This month</p>
                    </div>

                    <!-- Stat Card 2 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-orange-600 bg-orange-50 px-2 py-1 rounded-full">-2kg</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Current Weight</h3>
                        <p class="text-3xl font-bold text-gray-900">72kg</p>
                        <p class="text-xs text-gray-500 mt-2">Goal: 68kg</p>
                    </div>

                    <!-- Stat Card 3 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">+5m</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Avg Workout Time</h3>
                        <p class="text-3xl font-bold text-gray-900">45min</p>
                        <p class="text-xs text-gray-500 mt-2">Per session</p>
                    </div>

                    <!-- Stat Card 4 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md transition">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-purple-600 bg-purple-50 px-2 py-1 rounded-full">87%</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Streak Days</h3>
                        <p class="text-3xl font-bold text-gray-900">7</p>
                        <p class="text-xs text-gray-500 mt-2">Keep it up! 🔥</p>
                    </div>
                </div>

                <!-- Two Column Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Active Programs -->
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-bold text-gray-900">Active Programs</h3>
                            <a href="#" class="text-sm font-medium text-green-600 hover:text-green-700">View All</a>
                        </div>

                        <div class="space-y-4">
                            <!-- Program Card -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-green-300 transition cursor-pointer">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 mb-1">Full Body Strength Program</h4>
                                        <p class="text-sm text-gray-500">Trainer: Coach Mike Johnson</p>
                                    </div>
                                    <span class="text-xs font-semibold bg-green-100 text-green-700 px-3 py-1 rounded-full">Active</span>
                                </div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm text-gray-600">Progress</span>
                                    <span class="text-sm font-semibold text-gray-900">12/16 workouts</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-green-500 to-teal-500 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>

                            <!-- Program Card -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:border-green-300 transition cursor-pointer">
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-gray-900 mb-1">Nutrition Plan - Weight Loss</h4>
                                        <p class="text-sm text-gray-500">Nutritionist: Sarah Williams</p>
                                    </div>
                                    <span class="text-xs font-semibold bg-blue-100 text-blue-700 px-3 py-1 rounded-full">In Progress</span>
                                </div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm text-gray-600">Progress</span>
                                    <span class="text-sm font-semibold text-gray-900">Week 3/8</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-blue-500 to-purple-500 h-2 rounded-full" style="width: 38%"></div>
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
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <span class="font-medium text-gray-900">Upload Progress</span>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-green-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>

                            <button class="w-full flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition group">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <span class="font-medium text-gray-900">Schedule Session</span>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>

                            <button class="w-full flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition group">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                        </svg>
                                    </div>
                                    <span class="font-medium text-gray-900">Message Trainer</span>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-600 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity & Messages -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Recent Activity -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-6">Recent Activity</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100 last:border-0">
                                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900">Completed workout: Upper Body Push</p>
                                    <p class="text-xs text-gray-500 mt-1">2 hours ago</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100 last:border-0">
                                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900">New feedback from Coach Mike</p>
                                    <p class="text-xs text-gray-500 mt-1">5 hours ago</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 pb-4 border-b border-gray-100 last:border-0">
                                <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900">Uploaded progress photos</p>
                                    <p class="text-xs text-gray-500 mt-1">Yesterday</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trainer Messages -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-bold text-gray-900">Trainer Messages</h3>
                            <span class="text-xs font-semibold bg-green-100 text-green-700 px-2 py-1 rounded-full">3 New</span>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3 p-3 bg-green-50 rounded-lg cursor-pointer hover:bg-green-100 transition">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-400 to-teal-500 flex items-center justify-center text-white font-semibold flex-shrink-0">
                                    MJ
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between mb-1">
                                        <p class="text-sm font-semibold text-gray-900">Coach Mike Johnson</p>
                                        <span class="text-xs text-gray-500">10m</span>
                                    </div>
                                    <p class="text-sm text-gray-600 line-clamp-2">Great job on today's workout! Your form is improving significantly. Let's increase the weight next session.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-3 rounded-lg cursor-pointer hover:bg-gray-50 transition">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center text-white font-semibold flex-shrink-0">
                                    SW
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between mb-1">
                                        <p class="text-sm font-semibold text-gray-900">Sarah Williams</p>
                                        <span class="text-xs text-gray-500">2h</span>
                                    </div>
                                    <p class="text-sm text-gray-600 line-clamp-2">Remember to track your meals this week. I've updated your macro targets.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
