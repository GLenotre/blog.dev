@extends('layouts.master')

@section('title')

@stop


@section('content')
    <h1>{{{$user->first_name}}}</h1>
{{-- 
	@if(Auth::check()) 

	@endif --}}

@stop