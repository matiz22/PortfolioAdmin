<?php

namespace App\Filament\Widgets;

use App\Services\Stats\CertificationsStatsService;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CertificationsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $certificationService = app(CertificationsStatsService::class);
        return [
            Stat::make('Certifications count', $certificationService->allCounted()),
            Stat::make('Certification published', $certificationService->publishedCounted()),
            Stat::make('Certification on home page', $certificationService->homePageCounted())
        ];
    }

    protected function getHeading(): string
    {
        return 'Certifications Overview';
    }
}
