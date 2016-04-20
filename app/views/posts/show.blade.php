@extends('layouts.master')

@section('title')
{{-- <h1>Results</h1> --}}
@stop

@section('content')
    <h1>{{{$post->title}}}</h1>
    <p>Created at: {{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
    
    <h3>{{{$post->body}}}</h3> 

    @if($post->image)
    	<img src="{{{$post->image}}}">
    @endif 
	
    @if(Auth::check()) 
      <a href="{{{action("PostsController@edit", $post->id)}}}">Edit</a></li>
   	@endif

@stop