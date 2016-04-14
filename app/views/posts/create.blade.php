@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	@yield('top-script')
</head>


@section('content')
{{-- <form method="post" action="{{{ action('PostsController@store') }}}"> --}}

	{{ Form::open(array('action' => 'PostsController@store')) }}


	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', null, ['placeholder'=>'Title']) }}
	{{ $errors->first('title', '<span class="help-block">:message</span>') }}

	{{ Form::label('body', 'Body') }}
	{{ Form::text('body', null, ['placeholder'=>'Body']) }}
	{{ $errors->first('body', '<span class="help-block">:message</span>') }}

	{{-- <input type="submit"> --}}
	{{ Form::submit('Click Me!') }}
	{{ Form::close() }}

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@stop