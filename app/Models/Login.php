<?php

namespace mySafebox\Models;

use Illuminate\Database\Eloquent\Model;

use mySafebox\User;

class Login extends Model
{
	protected $fillable = ['name', 'username', 'comment'];
	
	/**
     * Get the user for login data.
     */
    public function user() {
    	return $this->belongsTo(User::class);
    }
    
}
