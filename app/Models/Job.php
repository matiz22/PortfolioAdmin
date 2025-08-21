<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Job extends Model
{
    use HasDisplayOrder, HasTranslations;

    public $table = 'job_listings';

    public array $translatable = [
        'title',
        'description',
    ];

    protected $fillable = [
        'company_name',
        'title',
        'location',
        'start_date',
        'end_date',
        'is_current',
        'description',
        'order',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Many-to-many relation to Skills
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'job_skill');
    }

    /**
     * Many-to-many relation to Technologies
     */
    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class, 'job_technology');
    }
}
