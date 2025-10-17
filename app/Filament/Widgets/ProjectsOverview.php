<?php

namespace App\Filament\Widgets;

use App\Services\Stats\ProjectsStatsService;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProjectsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $projectStatsService = app(ProjectsStatsService::class);
        return [
            Stat::make('Projects count', $projectStatsService->allCounted()),
            Stat::make('Project published', $projectStatsService->publishedCounted()),
            Stat::make('Project on home page', $projectStatsService->homePageCounted())
        ];
    }

    protected function getHeading(): string
    {
        return 'Projects Overview';
    }
}
