<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | OJT Information System</title>
	<?php include('include/style.php'); ?>
</head>
<body>

<div class="container_login">
	<div class="card card_container">
	  	<div class="card-body px-5 py-4">
			<div class="form-group text-center">
				<img src="assets/logo/logo-login.png" alt="">
			</div>
	  		<div class="form-group">
	  			<label><small><strong>EMAIL OR USERNAME</strong></small></label>
	  			<input type="text" name="" class="form-control" placeholder="e.g. juan@gmail.com">
	  		</div>
	  		<div class="form-group">
	  			<label><small><strong>PASSWORD</strong></small></label>
	  			<input type="password" name="" class="form-control">
	  		</div>
	  		<div class="form-group">
	  			<button class="form-btn form-btn-md btn-blue col-lg-12"><strong>LOGIN</strong></button>
	  		</div>
			<div class="form-group page_nav text-right">
				<span>Not yet registered? <span class="page_nav_label" onclick="location.href='register.php'">Create an account.</span></span>
			</div>
  		</div>
	</div>
</div>

<?php include('include/script.php'); ?>
</body>
</html>