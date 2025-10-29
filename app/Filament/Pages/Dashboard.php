<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Widgets;
use Illuminate\Contracts\Support\Htmlable;

class Dashboard extends Page
{
    // protected string $view = 'filament.pages.dashboard';
     public function getTitle(): string|Htmlable
    {
        return 'Fitwell Pro Dashboard';
    }

    protected function getWidgets(): array
    {
        return [
            Widgets\StatsOverviewWidget::class,
            // \App\Filament\Widgets\WorkoutChart::class,
            // \App\Filament\Widgets\UserGrowthChart::class,
        ];
    }

    protected function getColumns(): int|string|array
    {
        return 2; // Two-column layout
    }
}
