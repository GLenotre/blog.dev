
<nav class="navbar navbar-default">
  <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-haspopup="true" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/posts">GL Blog</a>
    </div>

    <!--  Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        {{-- <li class="active"><a href="about.php">About <span class="sr-only">(current)</span></a></li> --}}
      
      <li><a href="/resume">Resume</a></li>
      <li><a href="/portfolio">Portfolio</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
        <?php if (Auth::check()) { ?>
          <li><a href="{{{ action('UserController@show', Auth::id()) }}}">User</a></li>
          <li><a href="{{{ action('PostsController@create') }}}">Create</a></li>
          <li><a href="{{{ action('UserController@getLogout') }}}">Logout</a></li>
        <?php } else { ?>
          <li><a href="{{{ action('UserController@showLogin') }}}">Login</a></li>
          <?php } ?>
        
        {{ Form::open(['method'=>'GET', 'action'=>'PostsController@index', 'class'=>'navbar-form navbar-right','role'=>'search'])  }}
              <input type="text" name="search" class="form-control" placeholder="Search titles">
        {{ Form::close() }}

      </ul>
    </div> <!-- /.navbar-collapse  -->
  </div> <!--  /.container-fluid  -->
</nav>
