@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <small>Written in {{$post->created_at}}</small>
    <p><a href="/posts" class="btn btn-default">Go Back!</a></p>
@endsection