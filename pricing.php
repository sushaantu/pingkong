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
</style>


<div class="minimal pricing">
  <div class="container">

    <div class="row">
      <h1 class="text-center">Pricing</h1>
      <p class="lead text-center"></p>
    </div>

    <div class="row">
    	<div class="col-sm-4 col-xs-6">
	    	<div class="text-center pricing-card free">
	    		<div class="plan">
	    			<h4>Free</h4>
	    		</div>
	    		<h1>0</h1>
	    		<p>5 Checks</p>
	    		<p>Multiple Zones</p>
	    		<p>5 minute interval</p>
	    		<p>7 days</p>
	    		<p>1 user</p>
	    		<p>Email</p>
	    		<a class="btn btn-default">Sign up</a>
	    	</div>
    	</div>

    	<div class="col-sm-4 col-xs-6">
    		<div class="text-center pricing-card angel">
	    		<div class="plan">
	    			<h4>Angel</h4>
	    			<h6>100 slots left</h6>
	    		</div>
	    		<h1>5</h1>
	    		<p>15 Checks</p>
	    		<p>Multiple Zones</p>
	    		<p>1 minute interval</p>
	    		<p>30 days</p>
	    		<p>3 user</p>
	    		<p>Email, SMS</p>
	    		<a class="btn btn-default">Sign up</a>
	    	</div>
    	</div>

    	<div class="col-sm-4 col-xs-12">
    		<div class="text-center general">
	    		<p>We are currently working with limited <a href="">Angel users</a> to make Ping Kong the best uptime monitoring service for sysadmins.</p>
	    		<br>
	    		<p>We will soon launch more plans but if you want to get in while it's still fresh &amp; cheap, you should sign up as our <a href="/angel">Angel user</a>.</p>
	    	</div>
    	</div>

    	
    </div>

  </div> <!-- /container -->
</div>


<?php include 'footer.php';?>