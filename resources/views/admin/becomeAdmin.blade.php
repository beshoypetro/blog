@extends('layouts.master')

@section('content')

    <form method="POST" action="/makeAdmin">

        {{csrf_field()}}



        <div class="form-group">

            <label for="write admin id"></label>

            <textarea name="id" placeholder="enter user _id" class="form-control" required></textarea>



        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary">Make Admin</button>

        </div>


    </form>



@endsection