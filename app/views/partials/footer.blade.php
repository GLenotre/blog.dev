
  		<footer class="footer">
      <div class="container">
		<br>      	

		<?php if (Auth::check()) { ?>
	          <li><a href="{{{ action('UserController@show', Auth::id()) }}}">User</a></li>
	          <li><a href="{{{ action('PostsController@create') }}}">Create</a></li>
	          <li><a href="{{{ action('UserController@getLogout') }}}">Logout</a></li>
        <?php } else { ?>
          	<li><a href="{{{ action('UserController@showLogin') }}}">Login</a></li>
          <?php } ?>

        <p class="text-muted">Created by <a href="https://github.com/GLenotre" class="icon-button icon-github">/GLenotre</a> <a href="https://www.linkedin.com/in/gaston-lenotre-555126a2" class="icon-button icon-linkedin"><i class="fa fa-lg fa-linkedin-square"></i></a></p> 
        
      </div> 
  </footer>



