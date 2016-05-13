@extends('layouts.master')

@section('title')
<h1>Blog</h1>
@stop

    @section('content')

    <div class="well">
        @foreach($posts as $post)
            <h3>{{{$post->title}}}</a></h3>
            {{-- <a href="{{{ action('PostsController@show', $post->id)}}}"> --}}
            {{$post->body}}
            <p>Created on {{{$post->created_at->setTimezone('America/Chicago')->format('m/j/y')}}}</p>
            <p>Written by {{{$post->user->first_name . " " . $post->user->last_name}}}</p>
        @endforeach
    </div>
    
    @stop