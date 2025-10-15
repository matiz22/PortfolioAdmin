<?php

namespace App\Filament\Widgets;

use App\Services\Stats\RealizationsStatsService;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RealizationsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $realizationsService = app(RealizationsStatsService::class);
        return [
            Stat::make('Realizations count', $realizationsService->allCounted()),
            Stat::make('Realization published', $realizationsService->publishedCounted()),
            Stat::make('Realization on home page', $realizationsService->homePageCounted())
        ];
    }

    protected function getHeading(): string
    {
        return 'Realizations Overview';
    }
}
