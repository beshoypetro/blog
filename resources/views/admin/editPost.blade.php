@extends('layouts.master')

@section('content')

    <form method="POST" action="/editPost">

        {{csrf_field()}}



        <div class="form-group">

            <label for="write post id"></label>

            <textarea name="id" placeholder="enter user _id" class="form-control" required></textarea>
            <textarea name="title" placeholder="enter post title" class="form-control" required></textarea>
            <textarea name="body" placeholder="enter post body" class="form-control" required></textarea>



        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary">edit Post</button>

        </div>


    </form>



@endsection