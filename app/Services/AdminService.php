<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class AdminService
{
    public function getAdminsEmails(): Collection
    {
        return User::select('email')->get();
    }
}
