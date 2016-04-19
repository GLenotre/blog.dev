@extends('layouts.master')

@section('title')
<h1>Edit</h1>
@stop

@section('content')

	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	
	{{ Form::close() }}