<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background: #222222;">
	<div class="container">
		<div class="col-sm-10" style="width: 600px;margin-left: 250px;margin-top: 80px;">
			<div class="jumbotron">
				<div class="form-group" style="margin-top: -50px;">
					<h1 style="margin-left: 150px;">Login</h1>
				</div>
				<hr>
				<form class="form-horizontal" action="loginform.php" method="post" style="margin-left: 50px;">
					<?php
					if(isset($_GET['error'])==true)
					{
						echo '<div class="alert alert-danger"><strong><span class="glyphicon glyphicon-info-sign"></span> Invalid Username or Password</strong></div>';
					}
					?>
					<div class="form-group input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control" name="user" placeholder="Username" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</span>
						<input type="password" class="form-control" name="pass" placeholder="Password" required>
					</div>
					<div class="form-group">
						<label>
							<input type="checkbox">
							Remember me
						</label>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" name="submit" style="width: 430px;">Login</button>
					</div>
					<div class="form-group">
						<a href="" style="margin-left: 310px;">Forget Password</a>
					</div>
					<!-- <span>
						<?php
							echo $error;
						?>
					</span> -->
				</form>
			</div>
		</div>
	</div>
</body>
</html>
