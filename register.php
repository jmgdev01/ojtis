<?php

include('include/config.php');

if (isset($_POST['btn_register'])) {

	$firstname = $_POST['i_fname'];
	$middlename = $_POST['i_mname'];
	$lastname = $_POST['i_lname'];
	$extension = $_POST['i_extname'];
	$dateofbirth = $_POST['i_bdate'];
	$age = $_POST['i_age'];
	$sex = $_POST['i_sex'];
	$status = $_POST['i_cstatus'];
	$bloodtype = $_POST['i_btype'];
	$height = $_POST['i_height'];
	$weight = $_POST['i_weight'];
	$contact = $_POST['i_contact'];
	$alternativeEmail = $_POST['i_altemail'];
	$provinceAddress = $_POST['i_paddress'];
	$placeofbirth = $_POST['i_pbirth'];
	$supervisor = $_POST['s_id'];
	$courseCode = $_POST['i_course_code'];
	$courseDescription = $_POST['i_course_description'];
	$major = $_POST['i_major'];
	$year = $_POST['i_year'];
	$section = $_POST['i_section'];
	$curriculum = $_POST['i_curriculum'];
	$intern = $_POST['acc_id'];


	$sql = mysqli_query($conn, "INSERT INTO user 
	 (i_fname, 
	 i_mname,
	 i_lname,
	 i_extname, 
	 i_bdate, 
	 i_age,
	 i_sex, 
	 i_cstatus, 
	 i_height, 
	 i_weight, 
	 i_contact,
	 i_altemail,
	 i_paddress,
	 i_pbirth,
	 s_id,
	 i_course_code,
	 i_course_description,
	 i_major,
	 i_year,
	 i_section,
	 i_curriculum,
	 acc_id) 
	 VALUES 
	 ('$firstname',
	 '$middlename',
	 '$lastname',
	 '$extension',
	 '$dateofbirth',
	 '$age',
	 '$sex',
	 '$status',
	 '$bloodtype',
	 '$height', 
	 '$weight', 
	 '$contact',
	 '$alternativeEmail',
	 '$provinceAddress',
	 '$placeofbirth',
	 '$supervisor',
	 '$courseCode',
	 '$courseDescription',
	 '$major',
	 '$year',
	 '$section',
	 '$curriculum',
	 '$intern')");
    }

?>

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
	  		<!-- personal info -->
			<ul class="nav nav-tabs d-flex align-items-center justify-content-center" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link active" 
					data-toggle="tab" 
					data-target="#personal_info" 
					type="button" 
					role="tab" 
					aria-selected="true"><i class="fa fa-user" aria-hidden="true"></i></i></button>
				</li>
				<!-- address & contact -->
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					data-toggle="tab" 
					data-target="#address_contact_info" 
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-address-book" aria-hidden="true"></i></button>
				</li>
				<!-- Cases -->
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					data-toggle="tab" 
					data-target="#address_contact_info" 
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-wheelchair" aria-hidden="true"></i></button>
				</li>
				<!-- Parent info -->
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					data-toggle="tab" 
					data-target="#address_contact_info" 
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-home" aria-hidden="true"></i></button>
				</li>
				<!-- educational background -->
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					data-toggle="tab" 
					data-target="#address_contact_info" 
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-graduation-cap" aria-hidden="true"></i></button>
				</li>
				<!-- skills & trainings -->
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					data-toggle="tab" 
					data-target="#address_contact_info" 
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-cogs" aria-hidden="true"></i></button>
				</li>
				<!-- emergency -->
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					data-toggle="tab" 
					data-target="#address_contact_info" 
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-ambulance" aria-hidden="true"></i></button>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="personal_info" role="tabpanel">
					
				<div class="row">
					<div class="form-group col-lg-12 pt-4" style="color: #FFBF00;">
						<h3><strong>PERSONAL INFORMATION</strong></h3>
					</div>
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
					<div class="form-group col-lg-3 col-md-3">
						<label><small><strong>STATUS</strong></small></label>
						<select class="form-control">
							<option value="">- Select -</option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Widow">Widow</option>
						</select>
					</div>
					<div class="form-group col-lg-3	 col-md-3">
						<label><small><strong>BLOODTYPE</strong></small></label>
						<select class="form-control">
							<option value="">- Select -</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>
					</div>
					<div class="form-group col-lg-3 col-md-3">
						<label><small><strong>HEIGHT</strong></small></label>
						<input type="number" name="i_height" class="form-control" placeholder="- cm -" min="1">
					</div>
					<div class="form-group col-lg-3 col-md-3">
						<label><small><strong>WEIGHT</strong></small></label>
						<input type="number" name="i_weight" class="form-control" placeholder="- kg -" min="1">
					</div>
				</div>
				</div>
				<div class="tab-pane fade" id="address_contact_info" role="tabpanel">
					2
				</div>
			</div>

			<div class="col-lg-12">
				</form>
				</div>
				<div class="form-group col-lg-12 text-center">
					<button class="form-btn form-btn-md btn-blue" name="btn_register"><strong>REGISTER</strong></button>
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