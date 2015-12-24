<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Status</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" >

    <!-- Custom styles for this template -->
    <style>
      /* Space out content a bit */
      body {
        padding-top: 20px;
        padding-bottom: 20px;
      }

      /* Everything but the jumbotron gets side spacing for mobile first views */
      .header,
      .status-holder,
      .footer {
        padding-right: 15px;
        padding-left: 15px;
      }

      /* Custom page header */
      .header {
        padding-bottom: 20px;
      }
      /* Make the masthead heading the same height as the navigation */
      .header h3 {
        margin-top: 0;
        margin-bottom: 0;
        line-height: 40px;
      }

      /* Custom page footer */
      .footer {
        padding-top: 10px;
        color: #777;
      }

      /* Customize container */
      @media (min-width: 768px) {
        .container {
          max-width: 730px;
        }
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Supporting .status-holder content */
      .status-holder {
        margin: 40px 0;
      }
      .status-holder p + h4 {
        margin-top: 28px;
      }

      /* Sexy fading <hr> */
      hr {
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(left, #FBFBFB, #eee, #FBFBFB);
      }

      /* Responsive: Portrait tablets and up */
      @media screen and (min-width: 768px) {
        /* Remove the padding we set earlier */
        .header,
        .status-holder,
        .footer {
          padding-right: 0;
          padding-left: 0;
        }
        /* Space out the masthead */
        .header {
          margin-bottom: 30px;
        }
        /* Remove the bottom border on the jumbotron for visual effect */
        .jumbotron {
          border-bottom: 0;
        }
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      
      <div class="header clearfix">
        <div class="col-md-12">
          <img src="/img/logo-dark.png" alt="">
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert">All systems operational</div>
          <div class="alert alert-warning" role="alert">Some systems have problem</div>
          <div class="alert alert-danger" role="alert">All systems down</div>
        </div>
      </div>

      <div class="row status-holder">
          <table class="table table-striped"> 
            <thead> 
              <tr> 
                <th>Name</th> 
                <th>Dec 17</th> 
                <th>Dec 18</th> 
                <th>Dec 19</th> 
                <th>Dec 20</th> 
                <th>Dec 21</th> 
                <th>Dec 22</th> 
                <th>Dec 23</th> 
              </tr> 
            </thead>
            <tbody> 
              <tr> 
                <td>uxready.com</td> 
                <td>Otto</td> 
                <td>@mdo</td> 
              </tr> 
              <tr> 
                <td>google.com</td> 
                <td>Thornton</td> 
                <td>@fat</td> 
              </tr> 
              <tr> 
                <td>facebook.com</td> 
                <td>the Bird</td> 
                <td>@twitter</td> 
              </tr> 
            </tbody> 
          </table>
      </div>
      
      <hr>

      <footer class="footer">
        <p class="text-center"><img src="/img/gorilla-thin.png" alt="" width="24"></p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
