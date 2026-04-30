<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use App\Traits\HasPublishedField;
use App\Traits\ManagesFileUploads;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Education extends Model
{
    use HasDisplayOrder,
        HasTranslations,
        ManagesFileUploads,
        HasPublishedField;

    public array $translatable = [
        'institution',
        'degree',
        'field_of_study',
        'description',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    protected $fillable = [
        'institution',
        'slug',
        'degree',
        'field_of_study',
        'grade',
        'start_date',
        'end_date',
        'is_current',
        'description',
        'order',
        'thumbnail',
        'home_page',
        'published',
        'seo_enabled',
        'seo_title',
        'seo_keywords',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
        'order' => 'integer',
        'published' => 'boolean',
        'home_page' => 'boolean',
        'seo_enabled' => 'boolean',
        'seo_keywords' => 'array',
    ];

    /**
     * Many-to-many relation to skills
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'education_skill');
    }

    /**
     * Many-to-many relation to technologies
     */
    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class, 'education_technology');
    }
}
