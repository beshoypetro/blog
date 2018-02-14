@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">
                <div class="blog-post">


                    <h1> {{ $post->title }}</h1>
                    {{--<h2>{{$post->where(user_id,$post->user_id)->first }}</h2>--}}

                    {{ $post->body }}

                    <hr>

                    <div class="comments">

                            <ul class="list group">


                                @foreach($comment  as $comment)

                                    <li class ="list-group-item">

                                        {{ $comment->created_at->diffForHumans() }}:&nbsp;
                                        <strong>
                                            {{ $user = \App\User::where('_id',$comment->user_id)->first()->name}}:




                                        </strong>

                                        {{ $comment->body }}


                                    </li>
                                    




                                @endforeach
                                


                            </ul>
                          <hr>
                        {{--add comment--}}

                        <div class="card">
                            <div class="card-block">

                                <form method="POST" action="/posts/{{$post->id}}/comments">

                                    {{csrf_field()}}



                                    <div class="form-group">

                                        <label for="write comment"></label>

                                        <textarea name="body" placeholder="enter comment" class="form-control" required></textarea>



                                        <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}">

                                    </div>


                                    <div class="form-group">

                                        <button type="submit" class="btn btn-primary">Add comment</button>

                                    </div>


                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection