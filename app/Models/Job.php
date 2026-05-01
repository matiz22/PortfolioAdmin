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
        'location',
        'company_name',
        'seo_title',
        'seo_description',
        'short_desc',
    ];

    protected $fillable = [
        'company_name',
        'company_link',
        'title',
        'slug',
        'location',
        'start_date',
        'end_date',
        'is_current',
        'description',
        'short_desc',
        'order',
        'home_page',
        'thumbnail',
        'published',
        'seo_enabled',
        'seo_title',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
        'order' => 'integer',
        'home_page' => 'boolean',
        'published' => 'boolean',
        'seo_enabled' => 'boolean',
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
