<?php include 'header.php';?>

<style>
	.navbar-right {
    display: none;
  }
  .footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  /* Set the fixed height of the footer here */
	  height: 60px;
	}
	ul {
		padding-left: 30px;
	}
</style>


<div class="minimal">
	<div class="container">

		<div class="row">
      <h1 class="text-center">Sign up as an Angel user!</h1>
      <p class="lead text-center">Become our Angel user for just $5 per month</p>
    </div>

    <br>
    <br>
    <br>

		<div class="row">
			<div class="col-md-5 col-md-offset-1">
				<p>We aim to make Ping Kong a userful and sustainable service that our users can rely on. So we are limiting signups to a small set of users we call Angel users. You can read more about Angel users on our <a href="">blog</a>.</p>
				<br>
				<p>In essence, our Angel users get:</p>
				<ul>
					<li>cheaper grandfathered plans</li>
					<li>priority access to new features</li>
					<li>direct support from the developers</li>
				</ul>
			</div>
			<div class="col-md-5">
				<form class="form-signin">
					<button type="button" class="btn btn-lg btn-default btn-block btn-github">Register with Github</button>
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
			    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
			  </form>
			</div>
		</div>

	 

	</div> <!-- /container -->
</div>


<?php include 'footer.php';?>