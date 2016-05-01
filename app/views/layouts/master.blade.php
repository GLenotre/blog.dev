<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	{{-- favicon icon --}}
		<link rel="apple-touch-icon" sizes="57x57" href="/img/Gaston_navy-blue_circle.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/img/Gaston_navy-blue_circle.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/img/Gaston_navy-blue_circle.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/img/Gaston_navy-blue_circle.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/img/Gaston_navy-blue_circle.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/img/Gaston_navy-blue_circle.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/img/Gaston_navy-blue_circle.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/img/Gaston_navy-blue_circle.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/img/Gaston_navy-blue_circle.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/img/Gaston_navy-blue_circle.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/img/Gaston_navy-blue_circle.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/img/Gaston_navy-blue_circle.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/img/Gaston_navy-blue_circle.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	@yield('top-script')
	
</head>

<body>
	@include('partials.navbar')
	<div class="container">
	@yield('title')
	@include('partials.header')
	
	@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

    @yield('content')

    {{-- favicon icon --}}


	</div>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

{{--     setTimeout(function() {
    ."alert".slideup
    } --}}
    @yield('bottom-script')
    @extends('partials.footer')

</body>