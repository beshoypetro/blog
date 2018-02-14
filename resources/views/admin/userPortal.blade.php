@extends('layouts.master')

@section('content')



        <ul class="list group">


            @foreach($users  as $user)

                <li class ="list-group-item">


                    <strong>

                        {{ $user->name }}:&nbsp;


                    </strong>
                    is admin =
                    {{ $user->is_admin }}
                    , user id =
                    {{$user->_id}}

                </li>





            @endforeach



        </ul>
        <form method="GET" action="/userAdmin">

            {{csrf_field()}}


            <div class="form-group">

                <button type="submit" class="btn btn-primary">makeAdmin</button>

            </div>

        </form>

@endsection