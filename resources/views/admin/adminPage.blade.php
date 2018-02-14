@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <h1>welcome to control room</h1>

                    <form method="GET" action="/controlUsers">

                        {{csrf_field()}}


                        <div class="form-group">

                            <button type="submit" class="btn btn-primary">user controller portal</button>

                        </div>

                    </form>

                    <form method="GET" action="/controlPosts">

                        {{csrf_field()}}


                        <div class="form-group">

                            <button type="submit" class="btn btn-primary">posts controller portal</button>

                        </div>

                    </form>
                    <form method="GET" action="/addForm">

                        {{csrf_field()}}


                        <div class="form-group">

                            <button type="submit" class="btn btn-primary">addUser</button>

                        </div>

                    </form>

                    <form method="GET" action="/controlComments">

                        {{csrf_field()}}


                        <div class="form-group">

                            <button type="submit" class="btn btn-primary">comments controller portal</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection