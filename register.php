<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register | OJT Information System</title>
	<?php include('include/style.php'); ?>
</head>
<body>

<div class="container_login_register">
	<div class="card card_container_2">
	  	<div class="card-body px-4 py-3">
			<div class="form-group text-center pt-2">
				<img src="assets/logo/logo-small.png" alt="">
				<h1 class="card_header">CREATE AN ACCOUNT</h1>
			</div>
	  		
			<div class="row">
				<div class="form-group col-lg-4 col-md-7">
					<label><small><strong>FIRST NAME</strong></small></label>
					<input type="text" name="i_fname" class="form-control" placeholder="e.g. Juan">
				</div>
				<div class="form-group col-lg-3 col-md-5">
					<label><small><strong>MIDDLE NAME</strong></small></label>
					<input type="text" name="i_mname" class="form-control" placeholder="e.g. Garcia">
				</div>
				<div class="form-group col-lg-3 col-md-7">
					<label><small><strong>LAST NAME</strong></small></label>
					<input type="text" name="i_lname" class="form-control" placeholder="e.g. Cruz">
				</div>
				<div class="form-group col-lg-2 col-md-5">
					<label><small><strong>EXT.</strong></small></label>
					<select class="form-control">
						<option value="">- Select -</option>
						<option value="Jr.">Jr.</option>
						<option value="Sr.">Sr.</option>
						<option value="III">III</option>
						<option value="IV">IV</option>
						<option value="V">V</option>
					</select>
				</div>
				<div class="form-group col-lg-5 col-md-5">
					<label><small><strong>DATE OF BIRTH</strong></small></label>
					<input type="date" name="i_bdate" class="form-control" placeholder="">
				</div>
				<div class="form-group col-lg-3 col-md-3">
					<label><small><strong>AGE</strong></small></label>
					<input type="number" name="i_age" class="form-control" placeholder="">
				</div>
				<div class="form-group col-lg-4 col-md-4">
					<label><small><strong>SEX</strong></small></label>
					<select class="form-control">
						<option value="">- Select -</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>

				<div class="form-group col-lg-12 text-center">
					<button class="form-btn form-btn-md btn-blue"><strong>REGISTER</strong></button>
				</div>
			</div>

			  <div class="form-group page_nav text-center">
				<span>Already have an account? <span class="page_nav_label" onclick="location.href='index.php'">Login</span></span>
			</div>
  		</div>
	</div>
</div>

<?php include('include/script.php'); ?>
</body>
</html>