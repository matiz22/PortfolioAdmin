<?php

namespace App\Filament\Widgets;

use App\Services\Stats\JobsStatsService;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class JobsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $jobService = app(JobsStatsService::class);
        return [
            Stat::make('Jobs count', $jobService->allCounted()),
            Stat::make('Job published', $jobService->publishedCounted()),
            Stat::make('Job on home page', $jobService->homePageCounted())
        ];
    }

    protected function getHeading(): string
    {
        return 'Jobs Overview';
    }
}
