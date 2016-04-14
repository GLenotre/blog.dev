@extends('layouts.master')

@section('content')
    <h1>Here's the title: {{{$post->title}}}</h1>
    <h2>Here's the body: {{{$post->body}}}</h2> 


@stop