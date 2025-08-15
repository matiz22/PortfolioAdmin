<?php

namespace App\Models;

use App\Traits\HasDisplayOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Certification extends Model
{
    use HasDisplayOrder, HasTranslations;

    public array $translatable = ['name', 'description'];

    protected $fillable = [
        'name',
        'issuing_organization',
        'issue_date',
        'expiration_date',
        'credential_id',
        'credential_url',
        'description',
        'order',
    ];

    protected $casts = [
        'issue_date' => 'date',
        'expiration_date' => 'date',
        'order' => 'integer',
    ];

    /**
     * Many-to-many relation to Skills
     */
    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'certification_skill');
    }

    /**
     * Many-to-many relation to Technologies
     */
    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class, 'certification_technology');
    }
}
