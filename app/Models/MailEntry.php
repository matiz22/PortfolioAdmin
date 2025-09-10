<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailEntry extends Model
{
    protected $fillable = [
        'form_name',
        'from_email',
        'from_name',
        'subject',
        'message',
        'status',
        'error_message',
    ];
}
