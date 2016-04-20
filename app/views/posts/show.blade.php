@extends('layouts.master')

@section('title')
{{-- <h1>Results</h1> --}}
@stop

@section('content')
    <h1>{{{$post->title}}}</h1>
    <p>Created on {{{$post->created_at->setTimezone('America/Chicago')->format(' m/j/y ')}}}</p>
    
    <h3>{{{$post->body}}}</h3> 

    @if($post->image)
    	<img src="{{{$post->image}}}">
    @endif 
	
	<br>
    @if(Auth::check()) 
      <a href="{{{action("PostsController@edit", $post->id)}}}">Edit post</a></li>
   	@endif

@stop