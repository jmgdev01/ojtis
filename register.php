<?php
	include("function/session.php");
	include("function/validate_user_session.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register | OJT Information System</title>
	<?php 
		include('function/style.php'); 
	?>
</head>
<body>

<div class="container_login_register">
	<div class="card card_container_2">
		<div class="card-body px-4 py-3">
			<div class="form-group text-center pt-2">
				<img src="assets/logo/logo-small.png" alt="">
				<h1 class="card_header">CREATE AN ACCOUNT</h1>
			</div>
			
			<div id="msg_alert" class="alert alert-dismissible">
				<span id="msg"></span>
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
							<input type="text" id="i_first_name" class="form-control" placeholder="e.g. Juan">
						</div>
						<div class="form-group col-lg-3 col-md-5">
							<label><small><strong>MIDDLE NAME</strong></small></label>
							<input type="text" id="i_middle_name" class="form-control" placeholder="e.g. Garcia">
						</div>
						<div class="form-group col-lg-3 col-md-7">
							<label><small><strong>LAST NAME <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="i_last_name" class="form-control" placeholder="e.g. Cruz">
						</div>
						<div class="form-group col-lg-2 col-md-5">
							<label><small><strong>EXT.</strong></small></label>
							<select class="form-control" id="i_suffix_name">
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
							<select class="form-control" id="i_sex">
								<option value="">- Select -</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>STATUS <span class="text-danger">*</span></strong></small></label>
							<select class="form-control" id="i_civil_status">
								<option value="">- Select -</option>
								<option value="Single">Single</option>
								<option value="Married">Married</option>
								<option value="Widow">Widow</option>
							</select>
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>HEIGHT <span class="text-danger">*</span></strong></small></label>
							<input type="number" id="i_height" class="form-control" placeholder="cm" min="1">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>WEIGHT <span class="text-danger">*</span></strong></small></label>
							<input type="number" id="i_weight" class="form-control" placeholder="kg" min="1">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>DATE OF BIRTH <span class="text-danger">*</span></strong></small></label>
							<input type="date" id="i_birth_date" class="form-control">
						</div>
						<div class="form-group col-lg-2 col-md-2">
							<label><small><strong>AGE <span class="text-danger">*</span></strong></small></label>
							<input type="number" id="i_age" class="form-control">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>PLACE OF BIRTH <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="i_place_birth" class="form-control" placeholder="e.g. Jaro, Iloilo">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>NATIONALITY <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="i_nationality" class="form-control" placeholder="e.g. Filipino">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button type="button" class="form-btn form-btn-sm btn-teal" id="btn_next1" type="button">Next</button>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="address_contact_info" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>ADDRESS DETAILS</strong></h3>
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>STREET <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="ad_street" class="form-control" placeholder="">
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>BARANGAY <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="ad_barangay" class="form-control" placeholder="e.g. New Poblacion">
						</div>
						<div class="form-group col-lg-5 col-md-5">
							<label><small><strong>MUNICIPALITY <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="ad_municipality" class="form-control" placeholder="e.g. Buenavista">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>ZIP CODE <span class="text-danger">*</span></strong></small></label>
							<input type="number" id="ad_zipcode" class="form-control" placeholder="e.g. 5044">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>PROVINCE <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="ad_province" class="form-control" placeholder="e.g. Guimaras">
						</div>

						<div class="form-group col-lg-12 pt-3">
							<h3><strong>CONTACT INFORMATION</strong></h3>
						</div>
						<div class="form-group col-lg-7 col-md-7">
							<label><small><strong>PERSONAL EMAIL ADDRESS <span class="text-danger">*</span></strong></small></label>
							<input type="email" id="ct_email_address" class="form-control" placeholder="e.g. juan.cruz@gmail.com">
						</div>
						<div class="form-group col-lg-5 col-md-5">
							<label><small><strong>CONTACT NUMBER <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="ct_mobile_no" class="form-control" placeholder="e.g. 09123456789">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous2">Previous</button>
							<button type="button" class="form-btn form-btn-sm btn-teal" id="btn_next2" type="button">Next</button>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="cases_details" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>DISABILITY</strong></h3>
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>PHYSICAL DISABILITY</strong></small></label>
							<input type="text" id="c_physical_disability" class="form-control" placeholder="e.g. N/A">
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>MENTAL DISABILITY</strong></small></label>
							<input type="text" id="c_mental_disability" class="form-control" placeholder="e.g. N/A">
						</div>
						
						<div class="form-group col-lg-12 pt-3">
							<h3><strong>LIABILITY</strong></h3>
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>CRIMINAL LIABILITY</strong></small></label>
							<input type="text" id="c_criminal_liability" class="form-control" placeholder="e.g. N/A">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous3">Previous</button>
							<button type="button" class="form-btn form-btn-sm btn-teal" id="btn_next3" type="button">Next</button>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="parent_info" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>PARENT INFORMATION</strong></h3>
						</div>
						<div class="form-group col-lg-8 col-md-7">
							<label><small><strong>FATHER'S NAME</strong></small></label>
							<input type="text" id="p_father" class="form-control" placeholder="e.g. Carlos Garcia Cruz">
						</div>
						<div class="form-group col-lg-4 col-md-5">
							<label><small><strong>OCCUPATION</strong></small></label>
							<input type="text" id="p_father_occupation" class="form-control" placeholder="e.g. Laborer">
						</div>
						<div class="form-group col-lg-8 col-md-7">
							<label><small><strong>MOTHER'S NAME</strong></small></label>
							<input type="text" id="p_mother" class="form-control" placeholder="e.g. Maria Santos Cruz">
						</div>
						<div class="form-group col-lg-4 col-md-5">
							<label><small><strong>OCCUPATION</strong></small></label>
							<input type="text" id="p_mother_occupation" class="form-control" placeholder="e.g. Housewife">
						</div>
						<div class="form-group col-lg-12 col-md-12">
							<label><small><strong>ADDRESS</strong></small></label>
							<input type="text" id="p_address" class="form-control" placeholder="e.g. New Poblacion, Buenavista, Guimaras">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous4">Previous</button>
							<button type="button" class="form-btn form-btn-sm btn-teal" id="btn_next4" type="button">Next</button>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="educational_background" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>EDUCATIONAL BACKGROUND</strong></h3>
						</div>
						<div class="form-group col-lg-8 col-md-8">
							<label><small><strong>ELEMENTARY <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="eb_elementary" class="form-control" placeholder="e.g. Buenavista Central School">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>YEAR GRADUATED <span class="text-danger">*</span></strong></small></label>
							<input type="number" id="eb_elem_year" class="form-control" placeholder="e.g. 2012">
						</div>
						<div class="form-group col-lg-8 col-md-8">
							<label><small><strong>SECONDARY / HIGH SCHOOL <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="eb_secondary" class="form-control" placeholder="e.g. Buenavista National School">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>YEAR GRADUATED <span class="text-danger">*</span></strong></small></label>
							<input type="number" id="eb_sec_year" class="form-control" placeholder="e.g. 2018">
						</div>
						<div class="form-group col-lg-8 col-md-8">
							<label><small><strong>TERTIARY / COLLEGE <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="eb_tertiary" class="form-control" placeholder="e.g. Guimaras State University">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>YEAR GRADUATED <span class="text-danger">*</span></strong></small></label>
							<input type="number" id="eb_ter_year" class="form-control" placeholder="e.g. 2022">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>COURSE CODE <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="eb_course_code" class="form-control" placeholder="e.g. BSIT">
						</div>
						<div class="form-group col-lg-5 col-md-5">
							<label><small><strong>COURSE DESCRIPTION <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="eb_course_description" class="form-control" placeholder="e.g. BS in Information Technology">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>ID NUMBER <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="eb_id_number" class="form-control" placeholder="e.g. ABC-1-0001">
						</div>

						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>YEAR <span class="text-danger">*</span></strong></small></label>
							<select class="form-control" id="eb_year">
								<option value="">- Select -</option>
								<option value="1">1st Year</option>
								<option value="2">2nd Year</option>
								<option value="3">3rd Year</option>
								<option value="4">4th Year</option>
							</select>
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>SECTION <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="eb_section" class="form-control" placeholder="e.g. A">
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>CURRICULUM <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="eb_curriculum" class="form-control" placeholder="e.g. BSIT22">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous5">Previous</button>
							<button type="button" class="form-btn form-btn-sm btn-teal" id="btn_next5" type="button">Next</button>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="skills_training" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>SKILLS</strong></h3>
						</div>
						<div class="form-group col-lg-12 col-md-12">
							<label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label>
							<textarea type="text" id="i_skills" row="3" class="form-control" placeholder="e.g. Playing Basketball, Developing Applications, etc."></textarea>
							<label><small>Separate each <strong>skill</strong> with <code>semicolon ( ; )</code></small></label>
						</div>
						<div class="form-group col-lg-12 pt-1">
							<h3><strong>TRAININGS AND SEMINARS</strong></h3>
						</div>
						<div class="form-group col-lg-12 col-md-12">
							<label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label>
							<textarea type="text" id="i_training_seminar" row="3" class="form-control" placeholder="e.g. Web Development, Computer Hardware Servicing, etc."></textarea>
							<label><small>Separate each <strong>training</strong> and <strong>seminar</strong> with <code>semicolon ( ; )</code></small></label>
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous6">Previous</button>
							<button type="button" class="form-btn form-btn-sm btn-teal" id="btn_next6" type="button">Next</button>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="emergency" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>EMERGENCY CONTACT</strong></h3>
						</div>
						<div class="form-group col-lg-8 col-md-8">
							<label><small><strong>GUARDIAN <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="em_guardian" class="form-control" placeholder="e.g. Maria Santos Cruz">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>RELATIONSHIP <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="em_relationship" class="form-control" placeholder="e.g. Mother">
						</div>
						<div class="form-group col-lg-8 col-md-8">
							<label><small><strong>ADDRESS <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="em_address" class="form-control" placeholder="e.g. New Poblacion, Buenavista, Guimaras">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>CONTACT NUMBER <span class="text-danger">*</span></strong></small></label>
							<input type="text" id="em_contact" class="form-control" placeholder="e.g. 09123456789">
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button class="form-btn form-btn-sm btn-yellow" id="btn_previous7">Previous</button>
							<button type="button" class="form-btn form-btn-sm btn-teal" id="btn_next7" type="button">Next</button>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="account" role="tabpanel">
					<div class="row">
						<div class="form-group col-lg-12 pt-4">
							<h3><strong>ACCOUNT DETAILS</strong></h3>
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>EMAIL <span class="text-danger">*</span></strong></small></label>
							<input type="email" id="acc_email_address" class="form-control" placeholder="e.g. juan@gmail.com">
						</div>
						<div class="form-group col-lg-6 col-md-6">
							<label><small><strong>PASSWORD <span class="text-danger">*</span></strong></small></label>
							<input type="password" id="acc_password" class="form-control" placeholder="">
							<small><strong>Password</strong> length shoud be at least <code>6-character long</code></small>
						</div>
						<div class="col-lg-12 page_nav pb-3 text-right">
							<button type="button" class="form-btn form-btn-sm btn-yellow" id="btn_previous8">Previous</button>
						</div>
						<div class="form-group col-lg-12 text-center">
							<button class="form-btn form-btn-md btn-blue" id="btn_register"><strong>REGISTER</strong></button>
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

<?php 
	include('function/script.php'); 
?>
<script>
$(document).ready(function(){

  $("#msg_alert").hide();

  $('#btn_register').click(function(){
    var i_first_name = $('#i_first_name').val();
    var i_middle_name = $('#i_middle_name').val();
    var i_last_name = $('#i_last_name').val();
	var i_suffix_name = $('#i_suffix_name option:selected').val();
	var i_sex = $('#i_sex option:selected').val();
	var i_civil_status = $('#i_civil_status option:selected').val();
    var i_height = $('#i_height').val();
    var i_weight = $('#i_weight').val();
    var i_birth_date = $('#i_birth_date').val();
    var i_age = $('#i_age').val();
	var i_place_birth = $('#i_place_birth').val();
    var i_nationality = $('#i_nationality').val();
    var i_skills = $('#i_skills').val();
    var i_training_seminar = $('#i_training_seminar').val();

	var ct_email_address = $('#ct_email_address').val();
	var ct_mobile_no = $('#ct_mobile_no').val();

	var ad_street = $('#ad_street').val();
	var ad_barangay = $('#ad_barangay').val();
	var ad_municipality = $('#ad_municipality').val();
	var ad_zipcode = $('#ad_zipcode').val();
	var ad_province = $('#ad_province').val();

	var c_physical_disability = $('#c_physical_disability').val();
	var c_mental_disability = $('#c_mental_disability').val();
	var c_criminal_liability = $('#c_criminal_liability').val();

	var p_father = $('#p_father').val();
	var p_father_occupation = $('#p_father_occupation').val();
	var p_mother = $('#p_mother').val();
	var p_mother_occupation = $('#p_mother_occupation').val();
	var p_address = $('#p_address').val();

	var eb_elementary = $('#eb_elementary').val();
	var eb_elem_year = $('#eb_elem_year').val();
	var eb_secondary = $('#eb_secondary').val();
	var eb_sec_year = $('#eb_sec_year').val();
	var eb_tertiary = $('#eb_tertiary').val();
	var eb_ter_year = $('#eb_ter_year').val();
	var eb_course_code = $('#eb_course_code').val();
	var eb_course_description = $('#eb_course_description').val();
	var eb_year = $('#eb_year option:selected').val();
	var eb_section = $('#eb_section').val();
	var eb_curriculum = $('#eb_curriculum').val();
	var eb_id_number = $('#eb_id_number').val();

	var em_guardian = $('#em_guardian').val();
	var em_relationship = $('#em_relationship').val();
	var em_address = $('#em_address').val();
	var em_contact = $('#em_contact').val();
	
	var acc_email_address = $('#acc_email_address').val();
	var acc_password = $('#acc_password').val();
	var acc_role = $('#acc_role').val();

    var action = "Register";

    if(i_first_name != '' &&
		i_last_name != '' &&
		i_sex != '' &&
		i_civil_status != '' &&
		i_height != '' &&
		i_weight != '' &&
		i_birth_date != '' &&
		i_age != '' &&
		i_place_birth != '' &&
		i_nationality != '' &&
		ct_email_address != '' &&
		ct_mobile_no != '' &&
		ad_barangay != '' &&
		ad_municipality != '' &&
		ad_zipcode != '' &&
		ad_province != '' &&
		p_father != '' &&
		p_father_occupation != '' &&
		p_mother != '' &&
		p_mother_occupation != '' &&
		p_address != '' &&
		eb_elementary != '' &&
		eb_elem_year != '' &&
		eb_secondary != '' &&
		eb_sec_year != '' &&
		eb_tertiary != '' &&
		eb_ter_year != '' &&
		eb_course_code != '' &&
		eb_course_description != '' &&
		eb_year != '' &&
		eb_section != '' &&
		eb_curriculum != '' &&
		eb_id_number != '' &&
		em_guardian != '' &&
		em_relationship != '' &&
		em_address != '' &&
		em_contact != '' &&
		acc_email_address != '' &&
		acc_password != '' &&
		acc_role != ''){
	  pl1 = acc_password.length;
      var email_pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if (email_pattern.test(acc_email_address)==false) {
        $("#msg_alert").show();
		$("#msg_alert").removeClass("alert bg-primary text_bold alert-dismissible");
		$("#msg_alert").removeClass("alert bg-warning text_bolder text-dark alert-dismissible");
		$("#msg_alert").addClass("alert bg-danger text_bold alert-dismissible");
		$("#msg").text("Invalid email address.");
		$("#msg_alert").delay(3000).fadeOut();
      } 
	  if(pl1 < 6) {
        $("#msg_alert").show();
		$("#msg_alert").removeClass("alert bg-primary text_bold alert-dismissible");
		$("#msg_alert").removeClass("alert bg-warning text_bolder text-dark alert-dismissible");
		$("#msg_alert").addClass("alert bg-danger text_bold alert-dismissible");
		$("#msg").text("Password length should be at least 6-character long.");
		$("#msg_alert").delay(3000).fadeOut();
      } 
	  if(pl1 >= 6 && email_pattern.test(acc_email_address)==true){
        $.ajax({
          url : "register-section/register-verification.php",
          method : "POST",
          data : {
			i_first_name:i_first_name,
			i_middle_name:i_middle_name,
			i_last_name:i_last_name,
			i_suffix_name:i_suffix_name,
			i_sex:i_sex,
			i_civil_status:i_civil_status,
			i_height:i_height,
			i_weight:i_weight,
			i_birth_date:i_birth_date,
			i_age:i_age,
			i_place_birth:i_place_birth,
			i_nationality:i_nationality,
			i_skills:i_skills,
			i_training_seminar:i_training_seminar,
			ct_email_address:ct_email_address,
			ct_mobile_no:ct_mobile_no,
			ad_street:ad_street,
			ad_barangay:ad_barangay,
			ad_municipality:ad_municipality,
			ad_zipcode:ad_zipcode,
			ad_province:ad_province,
			c_physical_disability:c_physical_disability,
			c_mental_disability:c_mental_disability,
			c_criminal_liability:c_criminal_liability,
			p_father:p_father,
			p_father_occupation:p_father_occupation,
			p_mother:p_mother,
			p_mother_occupation:p_mother_occupation,
			p_address:p_address,
			eb_elementary:eb_elementary,
			eb_elem_year:eb_elem_year,
			eb_secondary:eb_secondary,
			eb_sec_year:eb_sec_year,
			eb_tertiary:eb_tertiary,
			eb_ter_year:eb_ter_year,
			eb_course_code:eb_course_code,
			eb_course_description:eb_course_description,
			eb_year:eb_year,
			eb_section:eb_section,
			eb_curriculum:eb_curriculum,
			eb_id_number:eb_id_number,
			em_guardian:em_guardian,
			em_relationship:em_relationship,
			em_address:em_address,
			em_contact:em_contact,
			acc_email_address:acc_email_address,
			acc_password:acc_password,
			acc_role:acc_role,
			action:action},
          success: function(data){
            if (data=="User already exist.") {
				$("#msg_alert").show();
				$("#msg_alert").removeClass("alert bg-danger text_bold alert-dismissible");
				$("#msg_alert").removeClass("alert bg-primary text_bold alert-dismissible");
				$("#msg_alert").addClass("alert bg-warning text_bolder text-dark alert-dismissible");
				$("#msg").text(data);
				$("#msg_alert").delay(3000).fadeOut();
            } else {
				$('#i_first_name').val('');
				$('#i_middle_name').val('');
				$('#i_last_name').val('');
				$("select#i_suffix_name").val('').change();
				$("select#i_sex").val('').change();
				$("select#i_civil_status").val('').change();
				$('#i_height').val('');
				$('#i_weight').val('');
				$('#i_birth_date').val('');
				$('#i_age').val('');
				$('#i_place_birth').val('');
				$('#i_nationality').val('');
				$('#i_skills').val('');
				$('#i_training_seminar').val('');

				$('#ct_email_address').val('');
				$('#ct_mobile_no').val('');

				$('#ad_street').val('');
				$('#ad_barangay').val('');
				$('#ad_municipality').val('');
				$('#ad_zipcode').val('');
				$('#ad_province').val('');

				$('#c_physical_disability').val('');
				$('#c_mental_disability').val('');
				$('#c_criminal_liability').val('');

				$('#p_father').val('');
				$('#p_father_occupation').val('');
				$('#p_mother').val('');
				$('#p_mother_occupation').val('');
				$('#p_address').val('');

				$('#eb_elementary').val('');
				$('#eb_elem_year').val('');
				$('#eb_secondary').val('');
				$('#eb_sec_year').val('');
				$('#eb_tertiary').val('');
				$('#eb_ter_year').val('');
				$('#eb_course_code').val('');
				$('#eb_course_description').val('');
				$('select#eb_year').val('').change();
				$('#eb_section').val('');
				$('#eb_curriculum').val('');
				$('#eb_id_number').val('');

				$('#em_guardian').val('');
				$('#em_relationship').val('');
				$('#em_address').val('');
				$('#em_contact').val('');

				$('#acc_email_address').val('');
				$('#acc_password').val('');
				$('#acc_role').val('');

				$("#msg_alert").show();
				$("#msg_alert").removeClass("alert bg-danger text_bold alert-dismissible");
				$("#msg_alert").removeClass("alert bg-warning text_bolder text-dark alert-dismissible");
				$("#msg_alert").addClass("alert bg-primary text_bold alert-dismissible");
				$("#msg").text("You have been registered successfully.");
				$("#msg_alert").delay(3000).fadeOut();

				if(data == 'intern') {
					$(location).attr('href','users/intern/index.php');
				} 
            }
          }
        });
      } 
    } else {
      $("#msg_alert").show();
      $("#msg_alert").removeClass("alert bg-primary text_bold alert-dismissible");
      $("#msg_alert").removeClass("alert bg-warning text_bolder text-dark alert-dismissible");
      $("#msg_alert").addClass("alert bg-danger text_bold alert-dismissible");
      $("#msg").text("All fields are required.");
      $("#msg_alert").delay(3000).fadeOut();
    }
  });
});
</script>
</body>
</html>