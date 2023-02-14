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
	<div class="card card_container_2">
	  	<div class="card-body px-5 py-4">
			<div class="form-group text-center">
				<img src="assets/logo/logo-register.png" alt="">
			</div>
	  		
			<div class="row">
				<div class="form-group col-lg-4">
					<label><small><strong>FIRST NAME</strong></small></label>
					<input type="text" name="" class="form-control" placeholder="e.g. Juan">
				</div>
				<div class="form-group col-lg-3">
					<label><small><strong>MIDDLE NAME</strong></small></label>
					<input type="text" name="" class="form-control" placeholder="e.g. Garcia">
				</div>
				<div class="form-group col-lg-3">
					<label><small><strong>LAST NAME</strong></small></label>
					<input type="text" name="" class="form-control" placeholder="e.g. Cruz">
				</div>
				<div class="form-group col-lg-2">
					<label><small><strong>EXT.</strong></small></label>
					<input type="text" name="" class="form-control" placeholder="e.g. Cruz">
				</div>

				<div class="form-group col-lg-12">
					<button class="form-btn form-btn-md btn-blue"><strong>REGISTER</strong></button>
				</div>
			</div>

			  <div class="form-group page_nav text-right">
				<span>Already have an account? <span class="page_nav_label" onclick="location.href='index.php'">Login.</span></span>
			</div>
  		</div>
	</div>
</div>

<?php include('include/script.php'); ?>
</body>
</html>