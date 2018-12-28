@extends('layouts.app')

@section('content')

    @if (Auth::guest())
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    @else

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; margin-right:25px;">
                    <h2>{{ $user-> name }}</h2>
                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        <label>Обновить свое фото</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="pull-right btn btn-sm btn-primary">
                    </form>

                </div>


            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p>
                        {{'Возраст - '. $profile->age}}
                    </p>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <p>
                        {{'Увлечения - '. $profile->hobbi}}
                    </p>
                </div>

            </div>

        </div>
    @endif



@endsection
