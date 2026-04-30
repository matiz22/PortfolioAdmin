<?php

namespace App\Services;

use App\Models\Project;
use App\Services\Contracts\SummarySelectsColumns;
use App\Services\Contracts\HomeCollections;
use App\Traits\GetHomePageItems;

class ProjectsService extends BaseService implements HomeCollections, SummarySelectsColumns
{
    use GetHomePageItems;

    public function __construct()
    {
        parent::__construct(Project::class, ['technologies']);
    }

    public function selectColumns(): array
    {
        return [
            'id',
            'slug',
            'title',
            'short_desc',
            'thumbnail',
            'live_url',
            'repo_url',
            'home_page',
            'published',
            'order',
        ];
    }

    public function relationSelects(): array
    {
        return [
            'technologies' => ['technologies.id', 'technologies.name'],
        ];
    }
}
