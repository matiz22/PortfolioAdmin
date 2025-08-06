<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Proficiency extends Model
{
    use HasTranslations;
    protected $fillable = [
        'name',
        'color',
    ];

    public array $translatable = ['name'];
}
