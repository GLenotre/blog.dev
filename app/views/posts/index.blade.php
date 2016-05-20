@extends('layouts.master')

@section('title')
<h1>Blog</h1>
@stop

    @section('content')

    <div class="well">
        @foreach($posts as $post)
            <a href="{{{ action('PostsController@show', $post->id)}}}"><h3>{{{$post->title}}}</h3></a>
            {{$post->body}}
            <p>Created on {{{$post->created_at->setTimezone('America/Chicago')->format('m/j/y')}}}</p>
            <p>Written by {{{$post->user->first_name . " " . $post->user->last_name}}}</p>
        @endforeach
    </div>
    
    @stop