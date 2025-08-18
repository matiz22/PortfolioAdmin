<?php

namespace App\Services;

use App\Models\Skill;

class SkillsService extends OrderedService
{

    protected function getModelClass(): string
    {
        return Skill::class;
    }
}
