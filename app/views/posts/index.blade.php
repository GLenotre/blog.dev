<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	@yield('top-script')
</head>

<body>
    @yield('content')

    <p>

		<a href="{{{ action('PostsController@show', 1)}}}">
			Read More
		</a>
    
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    @yield('bottom-script')

</body>