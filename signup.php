<?php include 'header.php';?>

<style>
body {
	background: #FAFAFB;
}

.navbar {
	margin-bottom: 0;
}

.navbar-default {
	background: #FAFAFB;
}

.navbar-default .navbar-nav > li > a {
	color: #5D6D81;
}

.navbar-default .navbar-nav > li > a:hover {
	color: #111;
}

.navbar-brand span {
  background: url(../img/logo-dark.png) no-repeat;
  display: inline-block;
  width: 106px;
  height: 43px;
}

.navbar-default .navbar-toggle .icon-bar {
	background-color: #5D6D81;
}

.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
  background-color: rgba(0, 0, 0, 0.13);
}

/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 10px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 10px;
}
</style>

<div class="auth-container">

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


<?php include 'footer.php';?>