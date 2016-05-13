<nav class="navbar navbar-default">
  <div class="container-fluid">
    <a href="/"><img src="/img/Gaston_navy-blue_circle.png" class="img-responsive center-block" alt="Gaston Logo" width="150" height="150"></a>
    <ul class="nav navbar-nav">
      <li><a href="/resume">Resume</a></li>
      <li><a href="/portfolio">Portfolio</a></li>
      <li><a href="/blog">Blog</a></li>
      
      {{-- {{ Form::open(['method'=>'GET', 'action'=>'PostsController@index', 'class'=>'navbar-form navbar-right','role'=>'search'])  }} --}}
            {{-- <input type="text" name="search" class="form-control" placeholder="Search titles"> --}}
      {{-- {{ Form::close() }} --}}

    </ul>
  </div> <!--  /.container-fluid  -->
</nav>
