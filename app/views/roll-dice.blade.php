@extends('layouts.master')

@section('top-script')
	<title>Blog dev site</title>

@section('content')
	@if($random == $dice)
		<h2>You guessed correctly</h2>
	@else
		<h2>You guessed wrong</h2>
	@endif

    <p>Rolled: {{{$dice}}}</p>
    <p>Guessed: {{{$random}}}</p>
@stop

@section('bottom-script')
	<script src=""></script>