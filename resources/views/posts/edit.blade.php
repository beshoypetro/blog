{{--@extends('layouts.app')--}}



{{--@section('content')--}}

    {{--<h1>edit post</h1>--}}

    {{--<form method="post" action="/dayone/public/posts/{{$post->id}}">--}}

        {{--{{csrf_field()}}--}}
        {{--<input type="hidden" name="_method" value="PUT">--}}

        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

        {{--<input type="text" name="title" placeholder="enter title">--}}

        {{--<input type="submit" name="submit">--}}

    {{--</form>--}}

{{--@endsection()--}}

@include('post.create')