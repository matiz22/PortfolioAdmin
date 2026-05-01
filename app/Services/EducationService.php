<?php

namespace App\Services;

use App\Models\Education;
use App\Services\Contracts\SummarySelectsColumns;
use App\Services\Contracts\HomeCollections;
use App\Traits\GetHomePageItems;

class EducationService extends BaseService implements HomeCollections, SummarySelectsColumns
{
    use GetHomePageItems;

    public function __construct()
    {
        parent::__construct(Education::class, ['technologies', 'skills']);
    }

    public function selectColumns(): array
    {
        return [
            'id',
            'slug',
            'institution',
            'degree',
            'field_of_study',
            'description',
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
