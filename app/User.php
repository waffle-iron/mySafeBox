<?php

namespace mySafebox;

use Illuminate\Foundation\Auth\User as Authenticatable;

use mySafebox\Models\Login;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the data for logins for the user.
     */
    public function logins() {
        return $this->hasMany(Login::class);
    }
    
}
