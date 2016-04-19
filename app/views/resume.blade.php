@extends('layouts.master')

@section('title')
<h1>Resume</h1>
@stop

@section('content')
	<a href="{{{ action('HomeController@showWelcome') }}}">Home</a>
	<a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
@stop

@section('bottom-script')
	<script src=""></script>
@stop