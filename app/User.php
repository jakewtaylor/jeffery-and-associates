<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'name', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
