@extends('layouts.master')

@section('title')
<h1>Portfolio</h1>
@stop

@section('top-script')
	<title>Portfolio | Gaston Lenotre</title>

@section('content')

	<div class="well">
      	<div class="row">
    		<div class="col-sm-3">
	     		<div class = "text-center"><a href="http://talkingtreefarm.com" target="_blank">
	    			<img class="img-responsive projects thumbnail" src="/img/rsz_talking_tree_farm.jpg"></a>
	      			<div class="caption">
			        <h3>Talking Tree Farm</h3>
			        <p>eCommerce site for a local organic farm.</p>
	       		</div>
	      	</div>
	    </div>
    		<div class="col-sm-3">
      			<div class = "text-center"><a href="http://s.codepen.io/glenotre/debug/RWdxqq" target="_blank">
      				<img class="img-responsive projects thumbnail" src="/img/rsz_pomodoro_timer.jpg"></a>
      				<div class="caption">
        			<h3>Pomodoro Timer</h3>
        			<p>Start a 25 minute pomodoro, and the timer will go off once 25 minutes has elapsed.</p>
      			</div>
      		</div>
    	</div>
	    	<div class="col-sm-3">
	    		<div class = "text-center">
			      <a href="http://s.codepen.io/glenotre/debug/epQGBx" target="_blank">
			      	<img class="img-responsive projects thumbnail" src="/img/rsz_random_quote__machine.jpg"></a>
			    	<div class="caption">
				        <h3>Random GK Quote Machine</h3>
				        <p>Find a random quote by G. K. Chesterton.</p>
	      			</div>
	      		</div>
	    	</div>
	    <div class="col-sm-3">
		    <div class = "text-center">
		     	<a href="http://s.codepen.io/glenotre/debug/EVMQBr" target="_blank">
		    	<img class="img-responsive projects thumbnail" src= "/img/rsz_js_calculator.jpg"></a>
			      	<div class="caption">
			        	<h3>JS Calculator</h3>
			        	<p>Chain mathematical operations together until you hit the equal button, and the calculator will tell you the correct output.</p>
			      	</div>
		    </div>
	    </div>
	    {{-- <div class="col-sm-3">
	     	<div class = "text-center">
	    		<img class="img-responsive projects thumbnail" src="">
	      		<div class="caption">
			        <h3>Weather Map API</h3>
			        <p>See the weather in any location. Toggle between Fahrenheit and Celsius.</p>
	       		</div>
	      	</div>
	    </div> --}}
	  </div>
	</div>

@stop

@section('bottom-script')
	<script src=></script>