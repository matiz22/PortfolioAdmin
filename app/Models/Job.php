<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use App\Traits\HasPublishedField;
use App\Traits\ManagesFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Job extends Model
{
    use HasDisplayOrder,
        HasTranslations,
        ManagesFileUploads,
        HasPublishedField;

    public $table = 'job_listings';

    protected array $fileFields = ['thumbnail'];

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
        'home_page',
        'thumbnail',
        'published',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
        'order' => 'integer',
        'home_page' => 'boolean',
        'published' => 'boolean',
    ];

    /**
     * Many-to-many relation to Skills
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(
            Skill::class,
            'job_listing_skill',
            'job_listing_id',
            'skill_id'
        );
    }

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(
            Technology::class,
            'job_listing_technology',
            'job_listing_id',
            'technology_id'
        );
    }
}
