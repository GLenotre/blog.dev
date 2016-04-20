@extends('layouts.master')

@section('title')
<h1>Edit</h1>
@stop

@section('content')
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}

	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', $post->title, ['placeholder'=>'Title']) }}
	{{ $errors->first('title', '<span class="help-block">:message</span>') }}
	<br>
	{{ Form::label('body', 'Body') }}
	{{ Form::textarea('body', $post->body, ['placeholder'=>'Body']) }}
	{{ $errors->first('body', '<span class="help-block">:message</span>') }}

	@if($post->image)
    	<img src="{{{$post->image}}}">
    @endif 

   	<div class="form-group">
		{{ Form::label('image', 'Image') }}
		{{ Form::file('image') }}
	</div>

	@if ($errors->has('image'))
	<p> {{ $errors->first('image', '<span class="help-block">:message</span>') }}
	@endif

	{{ Form::submit('Click Me!') }}
	{{ Form::close() }}
@stop