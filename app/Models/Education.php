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
    ];

    protected $fillable = [
        'institution',
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
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
        'order' => 'integer',
        'published' => 'boolean',
        'home_page' => 'boolean',
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
