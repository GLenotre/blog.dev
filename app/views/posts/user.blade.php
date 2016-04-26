@extends('layouts.master')

@section('title')

@stop


@section('content')
    @if(Auth::check())

    <h1>{{{$user->last_name}}}</h1>

	 

	@endif

@stop