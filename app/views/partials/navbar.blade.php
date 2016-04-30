
<nav class="navbar navbar-default">
  <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->

      <img src="/img/Gaston_navy-blue_circle.png" class="img-responsive center-block" alt="Gaston Logo" width="150" height="150"> 

    <!--  Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        {{-- <li class="active"><a href="about.php">About <span class="sr-only">(current)</span></a></li> --}}
      
      <li><a href="/resume">    Resume</a></li>
      <li><a href="/portfolio">Portfolio</a></li>
      
        
        {{ Form::open(['method'=>'GET', 'action'=>'PostsController@index', 'class'=>'navbar-form navbar-right','role'=>'search'])  }}
              <input type="text" name="search" class="form-control" placeholder="Search titles">
        {{ Form::close() }}

      </ul>
    </div> <!-- /.navbar-collapse  -->
  </div> <!--  /.container-fluid  -->
</nav>
