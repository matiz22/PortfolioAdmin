<?php

namespace App\Services;

use App\Models\Skill;

class SkillsService extends OrderedService
{
    public function __construct()
    {
        parent::__construct(Skill::class, ['proficiencies']);
    }
}
