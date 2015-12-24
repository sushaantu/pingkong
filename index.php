<?php include 'header.php';?>

<style>
#gradient {
  background: #145791;
  background: radial-gradient(ellipse farthest-side at 100% 100%, #56C9CE 10%, #145791 100%);
  background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, rgba(23, 33, 158, 0.75)), color-stop(100%, rgba(17, 2, 49, 0))), -webkit-gradient(linear, 0% 100%, 100% 0%, color-stop(0%, rgba(105, 19, 121, 0.78)), color-stop(12.5%, #f67cb7), color-stop(25%, #f99797), color-stop(37.5%, #f1b79f), color-stop(50%, #e1a7b7), color-stop(62.5%, #c3bcb0), color-stop(75%, #8aaab2), color-stop(87.5%, #1693ca), color-stop(100%, #253eb6));
}

.navbar-brand span {
  background: url(../img/logo.png) no-repeat;
  display: inline-block;
  width: 106px;
  height: 43px;
}

.navbar-default {
  background: transparent;
}

.navbar-default .navbar-nav > li > a {
  color: #fff;
}

.navbar-default .navbar-nav > li > a:hover {
  color: #fff;
}

.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 50px;
}

#gradient .text-muted {
  color: rgba(255, 255, 255, 0.8);
}
</style>


<div id="hanuman">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h1 class="whatwedo animated fadeIn">Website monitoring <em class="for">for</em> sysadmins</h1>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="terminal animation-target">
          <div class="terminal-header">
            <div class="t-buttons">
              <button class="t-close"></button>
              <button class="t-minimize"></button>
              <button class="t-maximize"></button>
            </div>
          </div>
          <main class="prompt">
            <p>$ pingkong monitor myshop.com</p>
            <p>Status: Running</p>
            <p>IP Address: 192.168.10.19</p>
            <p>Loading time: 235 ms</p>
            <p>Last checked: Fri Oct 16 14:50:27 2015</p>
            <p class="grapher"><span class="sparkline">13, 18, 16, 19, 1, 10, 11, 23, 12, 4, 15, 22, 17, 3, 2, 24, 20, 9, 5, 6, 3, 2, 14, 8, 17, 19, 9, 21, 12, 1, 13, 7, 16, 11, 23, 4, 15, 10, 20, 22, 23, 8, 15, 24, 7, 20, 12, 17, 5, 16, 19, 22, 6, 11, 13, 3, 2, 1, 21, 14, 76, 11, 55, 50, 12, 18, 96, 61, 19, 93</span></p>
          </main>
          
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    
    <br>
    <br>

    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <a href="/signup.php" class="btn btn-lg btn-primary btn-block">Try now!</a>
        <h6 class="text-muted text-center">30 day Free Trial. No Credit Card required.</h6>
      </div>
    </div>

  </div>  
</div>
</div><!-- end of #gradient -->

<!--
<div class="features">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h4><i class="fa fa-fighter-jet"></i> Fast Checks</h4>
        <p>Choose the check interval that suits you</p>
      </div>
      <div class="col-md-3">
        <h4><i class="fa fa-bell"></i> Email &amp; SMS alerts</h4>
        <p>Get notified before anyone else</p>
      </div>
      <div class="col-md-3">
        <h4><i class="fa fa-lock"></i> SSL Testing</h4>
        <p>Know when your website is not securely accessed</p>
      </div>
      <div class="col-md-3">
        <h4><i class="fa fa-globe"></i> Multiple locations</h4>
        <p>We track from multiple points to avoid data failure</p>
      </div>
    </div>
  </div>
</div>
-->

<?php include 'footer.php';?>