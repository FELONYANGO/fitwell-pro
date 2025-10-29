<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\Workout;

class StatsOverviewWidget extends BaseStatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('Active members')
                ->color('success'),
            Stat::make('Total Workouts', Workout::count())
                ->description('Logged in the system')
                ->color('info'),
            Stat::make('Active Subscriptions', 42) // example static number
                ->description('Current plans running')
                ->color('warning'),
        ];
    }
}
