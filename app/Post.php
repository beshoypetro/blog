<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\comment;
use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent {


    protected $fillable =[

        'title'

        ,'body'

        ,'user_id'

        ,'approved'

    ];


            public function comment (){


    return $this->hasMany(Comment::class);

}

    public function addComment ($body){


        Comment::create([

            'body' => $body

            ,'post_id'=>$this->id

            , 'user_id'=>$this->user_id



        ]);

    }

    public function user (){
        return $this->belongsto(User::class);
    }

    public function comments (){
        return $this->embedsMany(Comment::class);

    }
//    public function photos(){
//
//
//        return $this->morphMany('App\photo','imageable');
//    }

//    public function user() {
//        return $this->belongsTo('User');
//    }

}
