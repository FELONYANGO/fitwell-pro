<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\User;

class UserGrowthChart extends ChartWidget
{
    protected ?string $heading = 'User Growth Chart';

    protected function getData(): array
    {
        $data = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        return [
            'datasets' => [
                [
                    'label' => 'Users Joined',
                    'data' => $data->values(),
                    'borderColor' => '#34d399',
                    'fill' => false,
                ],
            ],
            'labels' => $data->keys()->map(fn ($m) => date('F', mktime(0, 0, 0, $m, 1))),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
