<?php

namespace App\Services;

use App\Models\Realization;
use App\Services\Contracts\SummarySelectsColumns;
use App\Services\Contracts\HomeCollections;
use App\Traits\GetHomePageItems;

class RealizationsService extends BaseService implements HomeCollections, SummarySelectsColumns
{
    use GetHomePageItems;

    public function __construct()
    {
        parent::__construct(Realization::class, ['technologies', 'skills']);
    }

    public function selectColumns(): array
    {
        return [
            'id',
            'slug',
            'title',
            'short_desc',
            'client_name',
            'location',
            'thumbnail',
            'home_page',
            'published',
            'order',
        ];
    }

    public function relationSelects(): array
    {
        return [
            'skills' => ['skills.id', 'skills.name'],
            'technologies' => ['technologies.id', 'technologies.name'],
        ];
    }
}
