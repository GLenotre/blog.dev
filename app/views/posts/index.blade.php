@extends('layouts.master')

    @section('content')

    <h1>All posts</h1>
    @foreach($posts as $post)
        <h2><a href="{{{ action('PostsController@show', $post->id)}}}">{{{$post->title}}}</a></h2>
        <h4> The Body: {{{$post->body}}}</h4>
        <p>Created at: {{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
        <p>Written by: {{{$post->user->first_name . " " . $post->user->last_name}}}</p>
    @endforeach

	{{ $posts->links() }}
    
    @stop