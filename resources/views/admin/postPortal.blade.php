@extends('layouts.master')

@section('content')



    <ul class="list group">


        @foreach($posts  as $post)

            <li class ="list-group-item">


                <strong>
                    post title->
                    {{ $post->title }}:&nbsp;
                    post _ID->
                    {{$post->_id}}:

                </strong>
                post body ->
                {{ $post->body }}
                , is approved  =
                {{$post->approved}}

            </li>





        @endforeach



    </ul>
    <form method="GET" action="/preEdit">

        {{csrf_field()}}


        <div class="form-group">

            <button type="submit" class="btn btn-primary">edit post</button>

        </div>

    </form>
    <form method="GET" action="/preApprovePost">

        {{csrf_field()}}


        <div class="form-group">

            <button type="submit" class="btn btn-primary">approve Post</button>

        </div>

    </form>

@endsection