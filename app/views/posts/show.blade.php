@extends('layouts.master')

@section('title')
<h1>Results</h1>
@stop

@section('content')
    <h1>Here's the title: {{{$post->title}}}</h1>
    <p>Created at: {{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
    
    <h3>Here's the body: {{{$post->body}}}</h2> 

    @if($post->image)
    	<img src="{{{$post->image}}}">
    @endif 
	
@stop