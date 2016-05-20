@extends('layouts.master')

@section('title')

@stop

@section('content')
    <div class="well">
      <h3>{{{$post->title}}}</h3>
      <p>Created on {{{$post->created_at->setTimezone('America/Chicago')->format(' m/j/y ')}}}</p>
      
      <p>{{$post->body}}</p> 

      @if($post->image)
      	<img src="{{{$post->image}}}">
      @endif 
  	
  	{{-- <br> --}}
      @if(Auth::check()) 
        <a href="{{{action("PostsController@edit", $post->id)}}}">Edit post</a>
     	@endif
    </div>

@stop