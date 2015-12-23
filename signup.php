<?php include 'header.php';?>

<style>
	footer, .navbar-right {
		display: none;
	}
</style>


<div class="minimal">
	<div class="container">

	  <form class="form-signin">
			<button type="button" class="btn btn-lg btn-default btn-block">Register with Github</button>
			<hr>
			<p class="text-muted">or Register with email</p>
	    <label for="inputEmail" class="sr-only">Email address</label>
	    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
	    <label for="inputPassword" class="sr-only">Password</label>
	    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	    <div class="checkbox">
	      <label>
	        <input type="checkbox" value="remember-me"> Remember me
	      </label>
	    </div>
	    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	  </form>

	</div> <!-- /container -->
</div>


<?php include 'footer.php';?>