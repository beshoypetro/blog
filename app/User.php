<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Authenticatable {

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



    public function posts()
    {


        return $this->hasMany(Post::class);

    }

    public function isAdmin()
    {
        return $this->is_admin; // this looks for an admin column in your users table
    }


}
