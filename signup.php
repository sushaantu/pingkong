<?php include 'header.php';?>

<style>
	footer, .navbar-right {
		display: none;
	}
	ul {
		padding-left: 30px;
	}
</style>


<div class="minimal">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
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