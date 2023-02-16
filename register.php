<?php
	include("function/config.php");
	include("register-section/register-verification.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register | OJT Information System</title>
	<?php include('function/style.php'); ?>
</head>
<body>

<div class="container_login_register">
	<div class="card card_container_2">
	  	<div class="card-body px-4 py-3">
			<div class="form-group text-center pt-2">
				<img src="assets/logo/logo-small.png" alt="">
				<h1 class="card_header">CREATE AN ACCOUNT</h1>
			</div>
	  		
			<ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link active"  
					id="pi_tab"
					type="button" 
					role="tab" 
					aria-selected="true"><i class="fa fa-vcard-o"></i></button>
				</li>
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					id="aci_tab"
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-map"></i></button>
				</li>
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					id="cd_tab"
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-wheelchair-alt"></i></button>
				</li>
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					id="pr_tab" 
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-sitemap"></i></button>
				</li>
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					id="eb_tab"
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-mortar-board"></i></button>
				</li>
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					id="st_tab"
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-soccer-ball-o"></i></button>
				</li>
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					id="em_tab"
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-medkit"></i></button>
				</li>
				<li class="nav-item" role="presentation">
					<button 
					class="nav-link" 
					id="ac_tab" 
					type="button" 
					role="tab" 
					aria-selected="false"><i class="fa fa-lock"></i></button>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="personal_info" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>PERSONAL INFORMATION</strong></h3>
						</div>
						<div class="form-group col-lg-4 col-md-7">
							<label><small><strong>FIRST NAME <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="i_fname" class="form-control" placeholder="e.g. Juan">
						</div>
						<div class="form-group col-lg-3 col-md-5">
							<label><small><strong>MIDDLE NAME</strong></small></label>
							<input type="text" name="i_mname" class="form-control" placeholder="e.g. Garcia">
						</div>
						<div class="form-group col-lg-3 col-md-7">
							<label><small><strong>LAST NAME <span class="text-danger">*</span></strong></small></label>
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
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>SEX <span class="text-danger">*</span></strong></small></label>
							<select class="form-control">
								<option value="">- Select -</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>STATUS <span class="text-danger">*</span></strong></small></label>
							<select class="form-control">
								<option value="">- Select -</option>
								<option value="Single">Single</option>
								<option value="Married">Married</option>
								<option value="Widow">Widow</option>
							</select>
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>HEIGHT <span class="text-danger">*</span></strong></small></label>
							<input type="number" name="i_height" class="form-control" placeholder="cm" min="1">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>WEIGHT <span class="text-danger">*</span></strong></small></label>
							<input type="number" name="i_weight" class="form-control" placeholder="kg" min="1">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>DATE OF BIRTH <span class="text-danger">*</span></strong></small></label>
							<input type="date" name="i_bdate" class="form-control">
						</div>
						<div class="form-group col-lg-2 col-md-2">
							<label><small><strong>AGE <span class="text-danger">*</span></strong></small></label>
							<input type="number" name="i_bdate" class="form-control">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>PLACE OF BIRTH <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="i_bdate" class="form-control" placeholder="e.g. Jaro, Iloilo">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>NATIONALITY <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="i_age" class="form-control" placeholder="e.g. Filipino">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-teal" id="btn_next1">Next</button>
						</div>
						<!-- <div class="col-lg-12 page_nav pb-3">
							<small><span>Note: <span class="text-danger">Please fill out all the required fields to proceed.</span></span></small>
						</div> -->
					</div>
				</div>
				<div class="tab-pane fade" id="address_contact_info" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>ADDRESS DETAILS</strong></h3>
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>STREET <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="">
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>BARANGAY <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. New Poblacion">
						</div>
						<div class="form-group col-lg-5 col-md-5">
							<label><small><strong>MUNICIPALITY <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Buenavista">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>ZIP CODE <span class="text-danger">*</span></strong></small></label>
							<input type="number" name="" class="form-control" placeholder="e.g. 5044">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>PROVINCE <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Guimaras">
						</div>

						<div class="form-group col-lg-12 pt-3">
							<h3><strong>CONTACT INFORMATION</strong></h3>
						</div>
						<div class="form-group col-lg-7 col-md-7">
							<label><small><strong>PERSONAL EMAIL ADDRESS <span class="text-danger">*</span></strong></small></label>
							<input type="email" name="" class="form-control" placeholder="e.g. juan.cruz@gmail.com">
						</div>
						<div class="form-group col-lg-5 col-md-5">
							<label><small><strong>CONTACT NUMBER <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. 09123456789">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous2">Previous</button>
							<button class="form-btn form-btn-sm btn-teal" id="btn_next2">Next</button>
						</div>
						<!-- <div class="col-lg-12 page_nav pb-3">
							<small><span>Note: <span class="text-danger">Please fill out all the required fields to proceed.</span></span></small>
						</div> -->
					</div>
				</div>
				<div class="tab-pane fade" id="cases_details" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>DISABILITY</strong></h3>
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>PHYSICAL DISABILITY</strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. N/A">
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>MENTAL DISABILITY</strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. N/A">
						</div>
						
						<div class="form-group col-lg-12 pt-3">
							<h3><strong>LIABILITY</strong></h3>
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>CRIMINAL LIABILITY</strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. N/A">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous3">Previous</button>
							<button class="form-btn form-btn-sm btn-teal" id="btn_next3">Next</button>
						</div>
						<!-- <div class="col-lg-12 page_nav pb-3">
							<small><span>Note: <span class="text-danger">Please fill out all the required fields to proceed.</span></span></small>
						</div> -->
					</div>
				</div>
				<div class="tab-pane fade" id="parent_info" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>PARENT INFORMATION</strong></h3>
						</div>
						<div class="form-group col-lg-8 col-md-7">
							<label><small><strong>FATHER NAME</strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Carlos Garcia Cruz">
						</div>
						<div class="form-group col-lg-4 col-md-5">
							<label><small><strong>OCCUPATION</strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Laborer">
						</div>
						<div class="form-group col-lg-8 col-md-7">
							<label><small><strong>MOTHER NAME</strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Maria Santos Cruz">
						</div>
						<div class="form-group col-lg-4 col-md-5">
							<label><small><strong>OCCUPATION</strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Housewife">
						</div>
						<div class="form-group col-lg-12 col-md-12">
							<label><small><strong>ADDRESS</strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. New Poblacion, Buenavista, Guimaras">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous4">Previous</button>
							<button class="form-btn form-btn-sm btn-teal" id="btn_next4">Next</button>
						</div>
						<!-- <div class="col-lg-12 page_nav pb-3">
							<small><span>Note: <span class="text-danger">Please fill out all the required fields to proceed.</span></span></small>
						</div> -->
					</div>
				</div>
				<div class="tab-pane fade" id="educational_background" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>EDUCATIONAL BACKGROUND</strong></h3>
						</div>
						<div class="form-group col-lg-8 col-md-8">
							<label><small><strong>ELEMENTARY <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Buenavista Central School">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>YEAR GRADUATED <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. 2012">
						</div>
						<div class="form-group col-lg-8 col-md-8">
							<label><small><strong>SECONDARY / HIGH SCHOOL <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Buenavista National School">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>YEAR GRADUATED <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. 2018">
						</div>
						<div class="form-group col-lg-8 col-md-8">
							<label><small><strong>TERTIARY / COLLEGE <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Guimaras State University">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>YEAR GRADUATED <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. 2022">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>COURSE CODE <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. BSIT">
						</div>
						<div class="form-group col-lg-5 col-md-5">
							<label><small><strong>COURSE DESCRIPTION <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. BS in Information Technology">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>ID NUMBER <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. ABC-1-0001">
						</div>

						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>YEAR <span class="text-danger">*</span></strong></small></label>
							<select class="form-control" name="">
								<option value="">- Select -</option>
								<option value="1">1st Year</option>
								<option value="2">2nd Year</option>
								<option value="3">3rd Year</option>
								<option value="4">4th Year</option>
							</select>
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>SECTION <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. A">
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>CURRICULUM <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. BSIT22">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous5">Previous</button>
							<button class="form-btn form-btn-sm btn-teal" id="btn_next5">Next</button>
						</div>
						<!-- <div class="col-lg-12 page_nav pb-3">
							<small><span>Note: <span class="text-danger">Please fill out all the required fields to proceed.</span></span></small>
						</div> -->
					</div>
				</div>
				<div class="tab-pane fade" id="skills_training" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>SKILLS</strong></h3>
						</div>
						<div class="form-group col-lg-12 col-md-12">
							<label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label>
							<textarea type="text" name="" row="3" class="form-control" placeholder="e.g. Playing Basketball, Developing Applications, etc."></textarea>
							<label><small>Separate each <strong>skill</strong> with <code>semicolon ( ; )</code></small></label>
						</div>
						<div class="form-group col-lg-12 pt-1">
							<h3><strong>TRAININGS AND SEMINARS</strong></h3>
						</div>
						<div class="form-group col-lg-12 col-md-12">
							<label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label>
							<textarea type="text" name="" row="3" class="form-control" placeholder="e.g. Web Development, Computer Hardware Servicing, etc."></textarea>
							<label><small>Separate each <strong>training</strong> and <strong>seminar</strong> with <code>semicolon ( ; )</code></small></label>
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous6">Previous</button>
							<button class="form-btn form-btn-sm btn-teal" id="btn_next6">Next</button>
						</div>
						<!-- <div class="col-lg-12 page_nav pb-3">
							<small><span>Note: <span class="text-danger">Please fill out all the required fields to proceed.</span></span></small>
						</div> -->
					</div>
				</div>
				<div class="tab-pane fade" id="emergency" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>EMERGENCY CONTACT</strong></h3>
						</div>
						<div class="form-group col-lg-8 col-md-8">
							<label><small><strong>GUARDIAN <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Maria Santos Cruz">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>RELATIONSHIP <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. Mother">
						</div>
						<div class="form-group col-lg-8 col-md-8">
							<label><small><strong>ADDRESS <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. New Poblacion, Buenavista, Guimaras">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>CONTACT NUMBER <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="" class="form-control" placeholder="e.g. 09123456789">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous7">Previous</button>
							<button class="form-btn form-btn-sm btn-teal" id="btn_next7">Next</button>
						</div>
						<!-- <div class="col-lg-12 page_nav pb-3">
							<small><span>Note: <span class="text-danger">Please fill out all the required fields to proceed.</span></span></small>
						</div> -->
					</div>
				</div>
				<div class="tab-pane fade" id="account" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>ACCOUNT DETAILS</strong></h3>
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>EMAIL <span class="text-danger">*</span></strong></small></label>
							<input type="email" name="" class="form-control" placeholder="e.g. juan@gmail.com">
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>PASSWORD <span class="text-danger">*</span></strong></small></label>
							<input type="password" name="" class="form-control" placeholder="">
							<small><strong>Password</strong> length shoud atleast <code>6-character long</code></small>
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous8">Previous</button>
						</div>
						<div class="form-group col-lg-12 text-center">
							<button class="form-btn form-btn-md btn-blue"><strong>REGISTER</strong></button>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group page_nav text-center">
				<span>Already have an account? <span class="page_nav_label" onclick="location.href='index.php'">Login</span></span>
			</div>
  		</div>
	</div>
</div>

<?php include('function/script.php'); ?>
</body>
</html>