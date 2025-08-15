<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Realization extends Model
{
    use HasDisplayOrder, HasTranslations;

    public array $translatable = [
        'title',
        'description',
    ];

    protected $fillable = [
        'title',
        'client_name',
        'client_url',
        'client_logo_url',
        'location',
        'thumbnail_url',
        'description',
        'order',
    ];

    protected $casts = [
        'order' => 'integer',
    ];

    /**
     * Many-to-many relation to Skills
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'realization_skill');
    }

    /**
     * Many-to-many relation to Technologies
     */
    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class, 'realization_technology');
    }
}
