<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Workout;

class WorkoutChart extends ChartWidget
{
    protected ?string $heading = 'Workout Chart';

    protected function getData(): array
    {
        $data = Workout::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        return [
            'datasets' => [
                [
                    'label' => 'Workouts',
                    'data' => $data->values(),
                    'backgroundColor' => '#60a5fa',
                ],
            ],
            'labels' => $data->keys()->map(fn ($m) => date('F', mktime(0, 0, 0, $m, 1))),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
