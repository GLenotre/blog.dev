@extends('layouts.master')

@section('top-script')
	<title>GLenotre Resume</title>
@stop

@section('content')
	<a href="{{{ action('HomeController@showWelcome') }}}">Home</a>
	<a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
@stop

@section('bottom-script')
	<script src=""></script>
@stop