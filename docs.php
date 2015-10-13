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
</style>

<div class="docs-container">
	<div class="container">
		<div class="row">
			<div class="col-md-3" id="leftCol">
				<div class="well"> 
	      	<ul class="nav nav-stacked" id="sidebar">
	          <li><a href="#sec0">Getting Started</a></li>
	          <li><a href="#sec1">Create Account</a></li>
	          <li><a href="#sec2">Adding Service</a></li>
	          <li><a href="#sec3">Tracking Service</a></li>
	          <li><a href="#sec4">Set Alerts</a></li>
	      	</ul>
				</div>
			</div>  

			<div class="col-md-9 docs-content">
	    	<h2 id="sec0">Getting Started</h2>	
				<div>
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#linux-osx" aria-controls="linux-osx" role="tab" data-toggle="tab">Linux/Mac OSX</a></li>
				    <li role="presentation"><a href="#debian-ubuntu" aria-controls="debian-ubuntu" role="tab" data-toggle="tab">Debian/Ubuntu</a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="linux-osx">
				    	<p>Install pingkong, by running the following command in your shell or Terminal:</p>
							<pre><code>curl https://cli.pingkong.io | bash</code></pre>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="debian-ubuntu">...</div>
				  </div>
				</div>


	    	<hr>
	    	<h2 id="sec1">Create Account</h2>
	    	<p>Run <code>pingkong init</code> to start the authentication process. Hit enter when prompted.</p>
	    	<pre><code>$ pingkong init<br>Welcome! This command will take you through the configuration of pingkong.
						<br>Your current configuration has been set to: [default]
						<br>To continue, you must login. Would you like to login (Y/n)?  y
						<br>Your browser has been opened to visit:
						<br>https://accounts.google.com/o/oauth2/auth?scope=https%3A%2F%2Fwww.googleapis.co%2Fauth%2Fappengine.admin+https%3A%2F%2...
					</code>
	    	</pre>
	    	<div class="row">
	        <div class="col-md-6">
	          <div class="panel panel-default">
	            <div class="panel-heading"><h3>Hello.</h3></div>
	            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
	            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
	            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
	            Aliquam in felis sit amet augue.
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6">
	            <div class="panel panel-default">
	            <div class="panel-heading"><h3>Hello.</h3></div>
	            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
	            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
	            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
	            Aliquam in felis sit amet augue.
	            </div>
	          </div>
	        </div>  
	    	</div>
	    
	    	<hr>
	    
	    	<h2 id="sec2">Adding Service</h2>
	    	<p>
	      Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
	      dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
	      eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
	      sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
	      Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut!
	    	</p>
	    	<div class="row">
	    		<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
	        	<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
	        	<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
	    	</div>
	    
	    	<hr>
	    
	    	<h2 id="sec3">Tracking Service</h2>
				Images are responsive sed @mdo but sum are more fun peratis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
	      totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
	      dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
	      eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
	      sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
	      Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut..
	    	<br>
	      Fos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
	      sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
	      Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut..
	    
	    
	    	<h2 id="sec4">Set Alerts</h2>
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
	      totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
	      dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
	      eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
	      sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
	      Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
	    
	    
	    	<hr>
	  	
	  	
			</div> 
		</div>
	</div>
</div>







<?php include 'footer.php';?>