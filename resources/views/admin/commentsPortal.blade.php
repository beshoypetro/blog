@extends('layouts.master')

@section('content')



    <ul class="list group">


        @foreach( $commentsCollection as $comment)

            <li class ="list-group-item">


                <strong>
                    comment body ->
                    {{ $comment->body }}


                </strong>

                , is approved  =
                {{$comment->approved}}
                , comment_id  =
                {{$comment->_id}}
                post_id =
                {{$comment->post_id}}

            </li>





        @endforeach



    </ul>
    <form method="GET" action="/preApproveComment">

        {{csrf_field()}}


        <div class="form-group">

            <button type="submit" class="btn btn-primary">approve Comment</button>

        </div>

    </form>

@endsection