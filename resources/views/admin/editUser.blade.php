@extends('layouts.master')

@section('content')


    <form method="POST" action="/addUser">

        {{csrf_field()}}



        <div class="form-group">

            <label for="name"></label>

            <textarea name="name" placeholder="enter name" class="form-control" required></textarea>

            <label for="email"></label>

            <textarea name="email" placeholder="enter email" class="form-control" required></textarea>

            <label for="password"></label>

            <textarea name="password" placeholder="enter password" class="form-control" required></textarea>
        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary">Add user</button>

        </div>


    </form>

@endsection