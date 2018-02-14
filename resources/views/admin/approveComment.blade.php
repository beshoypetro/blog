@extends('layouts.master')

@section('content')

    <form method="POST" action="/approveComment">

        {{csrf_field()}}



        <div class="form-group">
            <label for="write post id"></label>
            <textarea name="post_id" placeholder="enter post id" class="form-control" required></textarea>
            <textarea name="id" placeholder="enter comment id" class="form-control" required></textarea>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">edit comment</button>
        </div>


    </form>



@endsection