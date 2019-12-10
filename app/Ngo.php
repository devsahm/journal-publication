<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ngo extends Authenticatable
{
    use Notifiable;

        protected $guard = 'ngo';

        protected $fillable = [
            'name','username', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
