<?php

namespace App\Filament\Widgets;

use App\Services\Stats\EducationStatsService;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EducationOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $educationStatsService = app(EducationStatsService::class);
        return [
            Stat::make('Education entries', $educationStatsService->allCounted()),
            Stat::make('Published', $educationStatsService->publishedCounted()),
            Stat::make('On home page', $educationStatsService->homePageCounted()),
            Stat::make('Completed', $educationStatsService->completed())
        ];
    }

    protected function getHeading(): string
    {
        return 'Education Overview';
    }
}
