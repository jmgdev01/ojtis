<?php

include('function/config.php');

	if (isset($_POST['btn_submit'])) {
        
        /*intern_tbl*/
		$i_first_name = $_POST['i_first_name'];
		$i_middle_name = $_POST['i_middle_name'];
		$i_last_name = $_POST['i_last_name'];
		$i_suffix_name = $_POST['i_suffix_name'];
		$i_img = $_POST['i_img'];
		$i_sex = $_POST['i_sex'];
		$i_civil_status = $_POST['i_civil_status'];
		$i_height = $_POST['i_height'];
		$i_weight = $_POST['i_weight'];
		$i_birth_date = $_POST['i_birth_date'];
		$i_age = $_POST['i_age'];
		$i_place_birth = $_POST['i_place_birth'];
		$i_nationality = $_POST['i_nationality'];
		$i_skills = $_POST['i_skills'];
		$i_training_seminar = $_POST['i_training_seminar'];


		$sql = mysqli_query($conn, "INSERT INTO intern_tbl (i_first_name, i_middle_name, i_last_name,i_suffix_name, i_img, i_sex,i_civil_status, i_height, i_weight, i_birth_date, i_age, i_place_birth, i_nationality, i_skills, i_training_seminar) 
        VALUES 
        ('$i_first_name','$i_middle_name', '$i_last_name','$i_suffix_name', '$i_img' , '$i_sex', '$i_civil_status', '$i_height', '$i_weight', '$i_birth_date', '$i_age', '$i_place_birth','$i_nationality', '$i_skills', '$i_training_seminar')");

        /*educational_background_tbl*/
        $eb_elementary = $_POST['eb_elementary'];
		$eb_elem_year = $_POST['eb_elem_year'];
		$eb_secondary = $_POST['eb_secondary'];
		$eb_sec_year = $_POST['eb_sec_year'];
		$eb_tertiary = $_POST['eb_tertiary'];
		$eb_ter_year = $_POST['eb_ter_year'];
		$eb_course_code = $_POST['eb_course_code'];
		$eb_course_description = $_POST['eb_course_description'];
		$eb_year = $_POST['eb_year'];
		$eb_section = $_POST['eb_section'];
		$eb_curriculum = $_POST['eb_curriculum'];
		$eb_id_number = $_POST['eb_id_number'];


        $sql1 = mysqli_query($conn, "INSERT INTO educational_background_tbl (eb_elementary, eb_elem_year, eb_secondary,eb_sec_year, eb_tertiary, eb_ter_year,eb_course_code, eb_course_description, eb_year, eb_section, eb_curriculum, eb_id_number) 
        VALUES 
        ('$eb_elementary','$eb_elem_year', '$eb_secondary','$eb_sec_year', '$eb_tertiary' , '$eb_ter_year', '$eb_course_code', '$eb_course_description', '$eb_year', '$eb_section', '$eb_curriculum', '$eb_id_number')");

        /*case_tbl*/
        $c_physical_disability = $_POST['c_physical_disability'];
		$c_mental_disability = $_POST['c_mental_disability'];
		$c_criminal_liability = $_POST['c_criminal_liability'];


        $sql2 = mysqli_query($conn, "INSERT INTO case_tbl (c_physical_disability, c_mental_disability, c_criminal_liability) 
        VALUES 
        ('$c_physical_disability','$c_mental_disability', '$c_criminal_liability')");

        /*accounts_tbl*/
        $acc_email_address = $_POST['acc_email_address'];
		$acc_password = $_POST['acc_password'];
		$acc_role = $_POST['acc_role'];


        $sql3 = mysqli_query($conn, "INSERT INTO accounts_tbl (acc_email_address, acc_password, acc_role) 
        VALUES 
        ('$acc_email_address','$acc_password', '$acc_role')");

        /*parent_tbl*/
        $p_father = $_POST['p_father'];
		$p_father_occupation = $_POST['p_father_occupation'];
		$p_mother = $_POST['p_mother'];
        $p_mother_occupation = $_POST['p_mother_occupation'];
		$p_address = $_POST['p_address'];


        $sql4 = mysqli_query($conn, "INSERT INTO parent_tbl (p_father, p_father_occupation, p_mother, p_mother_occupation, p_address) 
        VALUES 
        ('$p_father','$p_father_occupation', '$p_mother', '$p_mother_occupation', '$p_address')");

        /*contacts_tbl*/
        $ct_email_address = $_POST['ct_email_address'];
		$ct_mobile_no = $_POST['ct_mobile_no'];


        $sql5 = mysqli_query($conn, "INSERT INTO contacts_tbl (ct_email_address, ct_mobile_no) 
        VALUES 
        ('$ct_email_address','$ct_mobile_no')");

        /*emergency_tbl*/
        $em_guardian = $_POST['em_guardian'];
		$em_relationship = $_POST['em_relationship'];
		$em_address = $_POST['em_address'];
        $em_contact = $_POST['em_contact'];


        $sql6 = mysqli_query($conn, "INSERT INTO emergency_tbl (em_guardian, em_relationship, em_address, em_contact) 
        VALUES 
        ('$em_guardian','$em_relationship', '$em_address', '$em_contact')");

        /*address_tbl*/
        $ad_street = $_POST['ad_street'];
		$ad_barangay = $_POST['ad_barangay'];
		$ad_municipality = $_POST['ad_municipality'];
        $ad_zipcode = $_POST['ad_zipcode'];
        $ad_province = $_POST['ad_province'];


        $sql7 = mysqli_query($conn, "INSERT INTO address_tbl (ad_street, ad_barangay, ad_municipality, ad_zipcode, ad_province) 
        VALUES 
        ('$ad_street','$ad_barangay', '$ad_municipality', '$ad_zipcode', '$ad_province')");
    }
?>