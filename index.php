<?php include 'header.php';?>

<style>
#gradient {
  background: #145791;
  background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, rgba(23, 33, 158, 0.75)), color-stop(100%, rgba(17, 2, 49, 0))), -webkit-gradient(linear, 0% 100%, 100% 0%, color-stop(0%, rgba(105, 19, 121, 0.78)), color-stop(12.5%, #f67cb7), color-stop(25%, #f99797), color-stop(37.5%, #f1b79f), color-stop(50%, #e1a7b7), color-stop(62.5%, #c3bcb0), color-stop(75%, #8aaab2), color-stop(87.5%, #1693ca), color-stop(100%, #253eb6));
}

.navbar-brand span {
  background: url(../img/logo.svg) no-repeat;
  display: inline-block;
  background-size: 106px 43px;
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
  color: rgba(255, 255, 255, 1);
}

</style>


<div id="hanuman">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h1 class="whatwedo animated fadeIn">Uptime monitoring <em class="for">for</em> sysadmins</h1>
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
            <p>$ <span id="typed"></span></p>
            <div id="first-output">
              <p>Status: Running</p>
              <p>IP Address: 80.18.45.97</p>
              <p>Loading time: 235 ms</p>
              <p>Last checked: Fri Oct 16 14:50:27 2015</p>
              <p class="sparkline">▃▇▁▂▄▃▂▂▅▁▂█▃▂▃▃▃▁▂▂▃▂▅▁</p>
            </div>
          </main>
          
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    
    <br>
    <br>

    <div class="row">
      <div class="text-center">
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup" class="mailchimp">
          <form action="//uxready.us2.list-manage.com/subscribe/post?u=8dd685c047c070f6df167df83&amp;id=50a05296de" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank" novalidate> 
            <div class="form-group">
              <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Enter email">
              <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary btn__bottom--border mailchimp__btn" data-style="shrink" data-horizontal>        
            </div>

            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div class="" style="position: absolute; left: -5000px;"><input type="text" name="b_410ed4e009d15301d90f6492b_753384883a" value=""></div>                          
          </form>
          <span class="message">Subscribe to get priority access</span>  
        </div><!--End mc_embed_signup-->    
      </div>
    </div>

  </div>  
</div>



<?php include 'footer.php';?>