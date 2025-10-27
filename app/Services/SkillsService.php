<?php

namespace App\Services;

use App\Models\Skill;

class SkillsService extends BaseService
{
    public function __construct()
    {
        parent::__construct(Skill::class, ['proficiency']);
    }
}
