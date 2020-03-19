<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Code
{
    protected $fillable = [
        'name',
        'secretCode',
        'user_id',
    ];
}
