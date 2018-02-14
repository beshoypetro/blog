<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class PostsController extends Controller
{

    public function index()
    {

        $posts = Post::where('approved',true)->latest()->get();

        return view('posts.index', compact('posts'));

    }


    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

      Post::create(

           [

               'title' => $request->title,
               'body' => $request->body,
               'user_id'=> Auth::user()->id,

           ]

        );
      return redirect('/');
    }


    public function show($post_id)
    {
        $post = Post::where('_id',$post_id)->first();
        $comments = $post->comments;
        $comment =  $comments->where('approved', true);

        return view('posts.show',compact('comment','post','comment_user'));
    }

    public function update(Request $request, $id)
    {
//        $post = Post::find($id);
//
//        $post->update($request->all());
//
//            return redirect('/posts');
    }


    public function destroy($id)
    {
        //
    }
    public function createPost(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
        ]);
    Post::create(

        [

            'title' => $request->title,
            'body' => $request->body,
           'approved' => false,

        ]

    );
        return response()->json([
            'message'=>'Successfully created post!'

        ],201);
    }

    public function edit(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'id'=>'required',
        ]);
        $post = Post::where('_id',$request->id)->first();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return response()->json([
            'message'=>'Successfully edit post!'

        ],201);
    }
    public function showPosts(Request $request)
    {


        $posts = Post::where('approved',true)->latest()->get();
        return $posts ;

    }


}
