<?php include 'header.php';?>

<style>
  footer, .navbar-right {
    display: none;
  }
  .pricing .pricing-card {
		border-radius: 4px;
  	color: #fff;
  	padding: 15px 0 20px 0; 
  }

  .pricing-card h1 {
  	font-size: 75px;
  	padding: 15px;
  }

  .pricing-card h1:before {
  	content: "$";
  	font-size: 20px;
  	top: 7px;
	  position: relative;
	  vertical-align: text-top;
  }

  .pricing-card .btn-default {
  	background: transparent;
	  color: #fff;
	  border: 2px solid #fff;
	  text-shadow: none;
  }

  .free {
  	background: #E91E63;
  }

  .basic {
  	background: #9C27B0;
  }

  .plus {
  	background: #673AB7;
  }

  .enterprise {
  	background: #2196F3;
  }

  .enterprise h1:after {
		content: "Starts at";
	  position: absolute;
	  font-size: 13px;
	  top: 64px;
	  left: 100px;
  }
</style>


<div class="minimal pricing">
  <div class="container">

    <div class="row">
      <h1 class="text-center">Pricing</h1>
      <p class="lead text-center"></p>
    </div>

    <div class="row">
    	<div class="col-md-3">
	    	<div class="text-center pricing-card free">
	    		<h4>FREE</h4>
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

    	<div class="col-md-3">
    		<div class="text-center pricing-card basic">
	    		<h4>BASIC</h4>
	    		<h1>8</h1>
	    		<p>15 Checks</p>
	    		<p>Multiple Zones</p>
	    		<p>5 minute interval</p>
	    		<p>7 days</p>
	    		<p>1 user</p>
	    		<p>Email</p>
	    		<a class="btn btn-default">Sign up</a>
	    	</div>
    	</div>

    	<div class="col-md-3">
    		<div class="text-center pricing-card plus">
	    		<h4>PLUS</h4>
	    		<h1>60</h1>
	    		<p>50 Checks</p>
	    		<p>Multiple Zones</p>
	    		<p>5 minute interval</p>
	    		<p>7 days</p>
	    		<p>1 user</p>
	    		<p>Email</p>
	    		<a class="btn btn-default">Sign up</a>
	    	</div>
    	</div>

    	<div class="col-md-3">
    		<div class="text-center pricing-card enterprise">
	    		<h4>ENTERPRISE</h4>
	    		<h1>250</h1>
	    		<p>Unlimited Checks</p>
	    		<p>Multiple Zones</p>
	    		<p>5 minute interval</p>
	    		<p>7 days</p>
	    		<p>1 user</p>
	    		<p>Email</p>
	    		<a class="btn btn-default">Contact</a>
	    	</div>
    	</div>
    </div>

  </div> <!-- /container -->
</div>


<?php include 'footer.php';?>