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
			<div class="form-group text-center">2
				<img src="assets/logo/logo-register.png" alt="">
			</div>
	  		
			<div class="row">
				<div class="form-group col-lg-4">
					<label><small><strong>FIRST NAME</strong></small></label>
					<input type="text" name="i_fname" class="form-control" placeholder="e.g. Juan">
				</div>
				<div class="form-group col-lg-3">
					<label><small><strong>MIDDLE NAME</strong></small></label>
					<input type="text" name="i_mname" class="form-control" placeholder="e.g. Garcia">
				</div>
				<div class="form-group col-lg-3">
					<label><small><strong>LAST NAME</strong></small></label>
					<input type="text" name="i_lname" class="form-control" placeholder="e.g. Cruz">
				</div>
				<div class="form-group col-lg-2">
					<label><small><strong>EXT.</strong></small></label>
					<select class="form-control" id="exampleFormControlSelect1">
						<option value="Jr.">Jr.</option>
						<option value="Sr.">Sr.</option>
						<option value="III">III</option>
						<option value="IV">IV</option>
						<option value="V">V</option>
					</select>
				</div>
				<div class="form-group col-lg-5">
					<label><small><strong>DATE OF BIRTH</strong></small></label>
					<input type="date" name="i_bdate" class="form-control" placeholder="">
				</div>
				<div class="form-group col-lg-3">
					<label><small><strong>AGE</strong></small></label>
					<input type="number" name="i_age" class="form-control" placeholder="">
				</div>
				<div class="form-group col-lg-4">
					<label><small><strong>SEX</strong></small></label>
					<select class="form-control" id="exampleFormControlSelect1">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>

				<div class="form-group col-lg-12">
					<button class="form-btn form-btn-md btn-blue"><strong>REGISTER</strong></button>
				</div>
			</div>

			  <div class="form-group page_nav text-left">
				<span>Already have an account? <span class="page_nav_label" onclick="location.href='index.php'">Login.</span></span>
			</div>
  		</div>
	</div>
</div>

<?php include('include/script.php'); ?>
</body>
</html>