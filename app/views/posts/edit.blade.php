@extends('layouts.master')

@section('top-script')

@stop

@section('content')

	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	
	{{ Form::close() }}