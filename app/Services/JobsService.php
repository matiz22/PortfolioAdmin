<?php

namespace App\Services;

use App\Models\Job;
use App\Services\Contracts\SummarySelectsColumns;
use App\Services\Contracts\HomeCollections;
use App\Traits\GetHomePageItems;

class JobsService extends BaseService implements HomeCollections, SummarySelectsColumns
{
    use GetHomePageItems;
    public function __construct()
    {
        parent::__construct(Job::class, ['technologies', 'skills']);
    }

    public function selectColumns(): array
    {
        return [
            'id',
            'slug',
            'title',
            'short_desc',
            'company_name',
            'location',
            'start_date',
            'end_date',
            'is_current',
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
