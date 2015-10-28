<?php include 'header.php';?>


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
  </div>  
</div>
</div><!-- end of #gradient -->

<div class="cta">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="clearfix">
          <p class="pull-left">Get started now</p>
        </div>
        <pre><code>curl https://cli.pingkong.io | bash</code></pre>
        <div class="clearfix">
          <p class="pull-right"><a href="">Refer documentation</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

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

<?php include 'footer.php';?>