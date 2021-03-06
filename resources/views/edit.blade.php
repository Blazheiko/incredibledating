@extends('layouts.app')

@section('content')

    @if (Auth::guest())
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    @else
        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>


            </div>

        @endif


        <h1>Редактируем {{$post->title}} </h1>
        {{Form::model($post, array('route' => array('post.update', $post->id))) }}
        @include('_form')
        {{ Form::close() }}

    @endif


@stop
