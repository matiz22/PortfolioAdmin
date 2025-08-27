<?php

namespace App\Services;

use App\Models\SocialLink;

class SocialLinksService extends OrderedService
{
    public function __construct()
    {
        parent::__construct(SocialLink::class);
    }
}
