{{-- @extends('layouts.trainer')

@section('title', 'Trainer Dashboard')
@section('page-title', 'Trainer Dashboard')
@section('page-subtitle', 'Welcome back, ' . $trainer->first_name . '!')

@section('content')
<div class="row g-4">
    <!-- Stats Overview -->
    <div class="col-12">
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card trainer-stat-card">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="mb-1">{{ $stats['totalClients'] }}</h3>
                            <p class="mb-0">Active Clients</p>
                            <small class="opacity-75">{{ $stats['maxClients'] }} max capacity</small>
                        </div>
                        <div class="fs-1 opacity-50">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card trainer-card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h3 class="mb-1">{{ $stats['sessionsToday'] }}</h3>
                                <p class="mb-0">Today's Sessions</p>
                                <small class="opacity-75">2 completed</small>
                            </div>
                            <div class="fs-1 opacity-50">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card trainer-card bg-warning text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h3 class="mb-1">${{ number_format($stats['monthlyRevenue']) }}</h3>
                                <p class="mb-0">Monthly Revenue</p>
                                <small class="opacity-75">+12% from last month</small>
                            </div>
                            <div class="fs-1 opacity-50">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card trainer-card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h3 class="mb-1">{{ $stats['averageRating'] }}</h3>
                                <p class="mb-0">Average Rating</p>
                                <div class="opacity-75">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= floor($stats['averageRating']))
                                            <i class="bi bi-star-fill"></i>
                                        @elseif($i == ceil($stats['averageRating']) && $stats['averageRating'] - floor($stats['averageRating']) >= 0.5)
                                            <i class="bi bi-star-half"></i>
                                        @else
                                            <i class="bi bi-star"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <div class="fs-1 opacity-50">
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Today's Schedule -->
    <div class="col-md-8">
        <div class="card trainer-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="bi bi-calendar-day me-2"></i>Today's Schedule</h5>
                <button class="btn btn-sm trainer-btn-primary">
                    <i class="bi bi-plus"></i> Add Session
                </button>
            </div>
            <div class="card-body">
                @if(count($todaySchedule) > 0)
                    @foreach($todaySchedule as $session)
                        <div class="d-flex align-items-center p-3 mb-2
                             @if($session['status'] == 'completed') bg-light @else border @endif rounded">
                            <div class="me-3">
                                <div class="text-center">
                                    <div class="fw-bold">{{ $session['time'] }}</div>
                                    <small class="text-muted">{{ $session['duration'] }}min</small>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">{{ $session['client'] }}</h6>
                                <small class="text-muted">{{ $session['type'] }}</small>
                            </div>
                            <div class="text-end">
                                @if($session['status'] == 'completed')
                                    <span class="badge bg-success">
                                        <i class="bi bi-check-circle me-1"></i>Completed
                                    </span>
                                @else
                                    <span class="badge bg-primary">
                                        <i class="bi bi-clock me-1"></i>Upcoming
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center py-4">
                        <i class="bi bi-calendar-x text-muted" style="font-size: 3rem;"></i>
                        <p class="text-muted mt-2">No sessions scheduled for today</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Quick Actions & Recent Clients -->
    <div class="col-md-4">
        <div class="card trainer-card">
            <div class="card-header">
                <h5 class="mb-0"><i class="bi bi-lightning me-2"></i>Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <button class="btn trainer-btn-primary">
                        <i class="bi bi-plus-circle me-2"></i>Schedule Session
                    </button>
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-journal-plus me-2"></i>Create Program
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="bi bi-person-plus me-2"></i>Add Client
                    </button>
                </div>
            </div>
        </div>

        <!-- Recent Client Activity -->
        <div class="card trainer-card mt-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="bi bi-activity me-2"></i>Recent Client Activity</h5>
            </div>
            <div class="card-body">
                @foreach($recentClients as $client)
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                {{ substr($client['name'], 0, 1) }}
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">{{ $client['name'] }}</h6>
                            <small class="text-muted d-block">Last: {{ $client['lastSession'] }}</small>
                            <small class="text-muted">Next: {{ $client['nextSession'] }}</small>
                        </div>
                        <div class="text-end">
                            <span class="badge
                                @if($client['progress'] == 'excellent') bg-success
                                @elseif($client['progress'] == 'improving') bg-info
                                @else bg-warning @endif">
                                {{ ucfirst($client['progress']) }}
                            </span>
                        </div>
                    </div>
                @endforeach

                <div class="text-center mt-3">
                    <a href="{{ route('trainer.clients.index') }}" class="btn btn-sm btn-outline-primary">
                        View All Clients
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Sessions This Week -->
    <div class="col-12">
        <div class="card trainer-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="bi bi-calendar-week me-2"></i>Upcoming Sessions This Week</h5>
                <a href="#" class="btn btn-sm btn-outline-primary">View Full Calendar</a>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    @foreach($upcomingSessions as $session)
                        <div class="col-md-6 col-lg-3">
                            <div class="border rounded p-3 h-100">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="badge bg-light text-dark">{{ $session['date'] }}</span>
                                    <small class="fw-bold">{{ $session['time'] }}</small>
                                </div>
                                <h6 class="mb-1">{{ $session['client'] }}</h6>
                                <small class="text-muted">{{ $session['type'] }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Charts -->
    <div class="col-md-6">
        <div class="card trainer-card">
            <div class="card-header">
                <h5 class="mb-0"><i class="bi bi-bar-chart me-2"></i>Client Progress Overview</h5>
            </div>
            <div class="card-body">
                <canvas id="clientProgressChart" height="200"></canvas>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card trainer-card">
            <div class="card-header">
                <h5 class="mb-0"><i class="bi bi-graph-up me-2"></i>Monthly Revenue</h5>
            </div>
            <div class="card-body">
                <canvas id="revenueChart" height="200"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Client Progress Chart
    const progressCtx = document.getElementById('clientProgressChart').getContext('2d');
    new Chart(progressCtx, {
        type: 'doughnut',
        data: {
            labels: ['Excellent', 'Improving', 'On Track', 'Behind'],
            datasets: [{
                data: [45, 30, 20, 5],
                backgroundColor: [
                    '#28a745',
                    '#17a2b8',
                    '#ffc107',
                    '#dc3545'
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });

    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Revenue ($)',
                data: [2800, 3100, 2900, 3400, 3200, 3250],
                borderColor: '#28a745',
                backgroundColor: 'rgba(40, 167, 69, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return '$' + value;
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>
@endpush --}}
@extends('layouts.app')

@section('title', 'Trainer Dashboard')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Welcome, Coach {{ Auth::user()->name }} 🏋️‍♀️</h1>

    {{-- Stats Summary --}}
    <div class="grid md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl shadow text-center">
            <h2 class="text-sm text-gray-500">Active Programs</h2>
            <p class="text-3xl font-bold text-blue-600">{{ $activeProgramsCount ?? 0 }}</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow text-center">
            <h2 class="text-sm text-gray-500">Total Clients</h2>
            <p class="text-3xl font-bold text-green-600">{{ $clientsCount ?? 0 }}</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow text-center">
            <h2 class="text-sm text-gray-500">Total Earnings</h2>
            <p class="text-3xl font-bold text-yellow-600">Ksh {{ number_format($earnings ?? 0) }}</p>
        </div>
    </div>

    {{-- Recent Programs --}}
    <div class="bg-white rounded-2xl shadow p-6 mb-8">
        <h2 class="text-lg font-semibold mb-4 text-gray-700">Your Programs</h2>

        @if($programs->isEmpty())
            <p class="text-gray-500">You haven’t created any programs yet.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 rounded-lg text-sm">
                    <thead class="bg-gray-50 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 text-left">Title</th>
                            <th class="px-4 py-2 text-left">Clients</th>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($programs as $program)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $program->title }}</td>
                                <td class="px-4 py-2">{{ $program->clients->count() }}</td>
                                <td class="px-4 py-2">{{ ucfirst($program->status) }}</td>
                                <td class="px-4 py-2 text-right">
                                    <a href="{{ route('trainer.programs.edit', $program->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    {{-- Create Button --}}
    <div class="text-right">
        <a href="{{ route('trainer.programs.create') }}" class="inline-block bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
            ➕ Create New Program
        </a>
    </div>
</div>
@endsection

