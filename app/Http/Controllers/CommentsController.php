<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function index()
    {
        //
    }
    public function create(Request $request)
    {
        $this->validate($request,[
            'post_id'=>'required',
            'body'=>'required',

        ]);

        $post = Post::where('_id',$request->post_id)->first();
        $comment = $post->comments()->create();
        $comment->body = $request->body;
        $comment->post_id =$request->post_id;
        $comment->approved = true ;
        $comment->user_id = '5a80a46d133a471d68005bf2' ;
        $comment->save();
        return response()->json([
            'message'=>'Successfully add comment!'

        ],201);
    }

    public function store(Request $request,$post_id)
    {
//        $this->middleware('auth');
        $user = Auth::user();
        $post = Post::find($post_id);
        $comment = $post->comments()->create();
        $comment->body = $request->body;
        $comment->post_id =$post_id;
        $comment->user_id = $user->_id;
        $comment->approved = false;
        $comment->save();


      return back();
    }

    public function show(Request $request)
    {
        $commentsCollection = collect();
        $posts = Post::all();
        foreach ($posts as $post)
            foreach ($post->comments as $comment)
//                if($comment->approved == false)
                    $commentsCollection->push($comment);
        return $commentsCollection ;
    }

    public function edit(Request $request)
    {

        $this->validate($request,[
            'post_id'=>'required',
            'id'=>'required',
            'body'=>'required',

        ]);

        $post = Post::where('_id',$request->post_id)->first();
        $comment = $post->comments->where('_id', $request->id)->first();
       $comment->body = $request->body;
        $comment->save();
        return response()->json([
            'message'=>'Successfully edit comment!'

        ],201);
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
