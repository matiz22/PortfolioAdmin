<?php

namespace App\Services;

use App\Models\Certification;
use App\Services\Contracts\SummarySelectsColumns;
use App\Services\Contracts\HomeCollections;
use App\Traits\GetHomePageItems;

class CertificationsService extends BaseService implements HomeCollections, SummarySelectsColumns
{
    use GetHomePageItems;
    public function __construct()
    {
        parent::__construct(Certification::class, ['technologies', 'skills']);
    }

    public function selectColumns(): array
    {
        return [
            'id',
            'slug',
            'name',
            'short_desc',
            'issuing_organization',
            'issue_date',
            'expiration_date',
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
