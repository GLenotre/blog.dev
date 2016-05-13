  <footer class="footer">
    <div class="container">
  		<br>      	

      <div class="row">
        <div class="col-sm-12 text-right">
      		@if (Auth::check())
      	          {{-- <li><a href="{{{ action('UserController@show', Auth::id()) }}}">User</a></li> --}}
      	          <li><a href="{{{ action('PostsController@create') }}}">Create</a></li>
      	          <li><a href="{{{ action('UserController@getLogout') }}}">Logout</a></li>
          @else
                	<a href="{{{ action('UserController@showLogin') }}}"><span class="login">Login</span></a>
          @endif
        </div>
      </div>  
    </div> 
  </footer>



