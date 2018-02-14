<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Comment extends Eloquent {

    protected $fillable =[

        'body',
        'post_id',
        'user_id',
        'approved'

    ]; //


   public function post (){


        return $this->belongsTo(Post::class);

    }




    public function user_comment (){


        return $this->embedsOne(User::class);

    }

}
