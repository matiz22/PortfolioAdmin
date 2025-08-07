<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Skill extends Model
{
    use HasTranslations;

    public array $translatable = ['name'];
    protected $fillable = ['name', 'proficiency_id'];

    public function proficiency(): BelongsTo
    {
        return $this->belongsTo(Proficiency::class);
    }
}
