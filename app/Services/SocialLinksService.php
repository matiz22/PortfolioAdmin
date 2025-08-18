<?php

namespace App\Services;

use App\Models\SocialLink;

class SocialLinksService extends OrderedService
{

    protected function getModelClass(): string
    {
        return SocialLink::class;
    }
}
