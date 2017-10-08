<html class=""><head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <!-- normalize & reset style -->
    <link rel="stylesheet" href="http://www.dar-elweb.com/demos/zarpos/assets/css/normalize.min.css" type="text/css">
    <link rel="stylesheet" href="http://www.dar-elweb.com/demos/zarpos/assets/css/reset.min.css" type="text/css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <!-- <link href="http://www.dar-elweb.com/demos/zarpos/assets/css/Style-Dark.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="Style-Dark.css">
    <style media="screen">
    body {
            background: url(upload/login.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
         }
    </style>
  <style id="__web-inspector-hide-shortcut-style__" type="text/css">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
    visibility: hidden !important;
}
</style></head>
  <body class="modal-open">
     <div class="modal fade in" id="login-modal" tabindex="-1" role="dialog" style="display: block; padding-left: 17px;">
       <div class="modal-dialog">
            <div class="loginmodal-container">
               <img src="upload/dp.jpg" alt="logo" style="max-height: 45px; max-width: 200px; margin: 0 auto"><h1>Login to Your Account</h1><br>
               <?php
					if(isset($_GET['error'])==true)
					{

						echo '<div class="alert alert-danger"><strong><span class="glyphicon glyphicon-info-sign"></span> Invalid Username or Password</strong></div>';
					}
					?>
               <form action="loginform.php" method="post" accept-charset="utf-8" class="login">               <input type="text" autofocus="" name="username" value="" placeholder="Username" required="">
               <input type="password" name="password" placeholder="Password" required="">
               <input type="submit" name="submit" value="Login" class="login loginmodal-submit">
              </form>
              <div class="login-help">
               2017 © Pharmacy Management System</div>
            </div>
         </div>
       </div>




      <!-- jQuery -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery-2.2.2.min.js"></script>
      <!-- waves material design effect -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/waves.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/bootstrap.min.js"></script>

      <script type="text/javascript">
      $(document).ready(function() {
         $('#login-modal').modal('show').on('hide.bs.modal', function (e) {
            e.preventDefault();
         });
      });
      </script>
   

<div class="modal-backdrop fade in"></div></body></html>