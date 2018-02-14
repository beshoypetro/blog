<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {

        return view('admin.adminPage');

    }

    public function showUsers()
    {
//        $users = User::where('is_admin','1')->get();

        $users = User::all();
        return view('admin.userPortal',compact('users'));

    }

    public function showPosts()
    {
        $posts =Post::where('approved',null)->get();

        return view('admin.postPortal',compact('posts'));

    }
    public function showComments()
    {
        $commentsCollection = collect();
            $posts = Post::all();
        foreach ($posts as $post)
            foreach ($post->comments as $comment)
                if($comment->approved == false)
            $commentsCollection->push($comment);


        return view('admin.commentsPortal',compact('commentsCollection'));

    }
    public function showPost()
    {

        return view('adminPage');

    }
    public function preApprovePost()
    {

        return view('admin.approvePost');

    }
    public function approvePost(Request $request)
    {
        $post = Post::where('_id',$request->id)->first();
        $post->approved = true;
        $post->save();
        return redirect('/controlPosts');

    }
    public function preApproveComment()
    {

        return view('admin.approveComment');

    }
    public function approveComment(Request $request)
    {
        $post = Post::where('_id', $request->post_id)->first();
        $comment = $post->comments->where('_id', $request->id)->first();
        $comment->approved = true;
        $comment->save();

//        dd($comment);

        return redirect('/controlComments');

    }
    public function userAdmin()
    {
        return view('admin.becomeAdmin');

    }
    public function makeAdmin(Request $request)
    {

        $user = User::where('_id',$request->id)->first();
        $user->is_admin = '1';
        $user->save();
        return redirect('/controlUsers');

    }
    public function preEdit()
    {
        return view('admin.editPost');

    }
    public function editPost (Request $request)
    {

        $post = Post::where('_id',$request->id)->first();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/controlPosts');

    }

    public function addUser(Request $request)
    {
        $user =new User([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);
        $user->save();

        return view('admin.adminPage');

    }
}
