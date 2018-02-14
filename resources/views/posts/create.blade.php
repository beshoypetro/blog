@extends('layouts.master')
@section('content')

    <div class="container">

        <div class="row">

        <div class="col-sm-8 blog-main">
            <div class="blog-post">
    <h1>create a new post</h1>

        <form method="POST" action="/posts">

            {{csrf_field()}}
            {{--<input type="hidden" name="_method" value="PUT" />--}}
            <Input  type="hidden"  name="user_id" value="{{Auth()->user()->id}}" >

                <div class="form-group">


                    <label for="title">Post Title</label>

                    <input type="text" id="title"  name="title" placeholder="enter title" class="form-control" required>


                </div>


                <div class="form-group">


                   <label for="body">Body</label>

                   <textarea id="body" name="body" placeholder="enter body" class="form-control" required></textarea>


                    <input type="hidden" name="user_id" id="user_id" value="1">
                 </div>

            <div class="form-group">

               <button type="submit" class="btn btn-primary">publish</button>

            </div>

        </form>
            </div>
    </div>
        </div>
    </div>
@endsection()
