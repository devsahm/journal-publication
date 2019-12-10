<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class State extends Authenticatable
{
    

    use Notifiable;

        protected $guard = 'state';

        protected $fillable = [
            'username','state', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
