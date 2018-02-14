@extends('layouts.master')

@section('content')

    <form method="POST" action="/approvePost">

        {{csrf_field()}}



        <div class="form-group">

            <label for="write post id"></label>

            <textarea name="id" placeholder="enter post id" class="form-control" required></textarea>

        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary">approve Post</button>

        </div>


    </form>



@endsection