<?php
include('../function/config.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  if(isset($_POST["action"])){
    $output = '';

    if($_POST["action"]=="Register"){

        date_default_timezone_set("Asia/Manila"); 
        $sql_init = mysqli_query($conn, "SELECT MAX(i_id+1) AS max_i_id FROM intern_tbl");
        $i_init = mysqli_fetch_assoc($sql_init);

        $max_id = '';
        if(strlen($i_init['max_i_id']) == 0) {
            $max_id .= '0001';
        }elseif(strlen($i_init['max_i_id']) == 1) {
            $max_id .= '000'.$i_init['max_i_id'];
        }elseif(strlen($i_init['max_i_id']) == 2) {
            $max_id .= '00'.$i_init['max_i_id'];
        }elseif(strlen($i_init['max_i_id']) == 3) {
            $max_id .= '0'.$i_init['max_i_id'];
        }elseif(strlen($i_init['max_i_id']) == 4) {
            $max_id .= $i_init['max_i_id'];
        }

        $i_code = "IN_".date("ymd")."_".$max_id;

        /*intern_tbl*/
        $i_first_name = test_input($_POST['i_first_name']);
        $i_middle_name = test_input($_POST['i_middle_name']);
        $i_last_name = test_input($_POST['i_last_name']);
        $i_suffix_name = test_input($_POST['i_suffix_name']);
        $i_sex = test_input($_POST['i_sex']);
        $i_civil_status = test_input($_POST['i_civil_status']);
        $i_height = test_input($_POST['i_height']);
        $i_weight = test_input($_POST['i_weight']);
        $i_birth_date = test_input($_POST['i_birth_date']);
        $i_age = test_input($_POST['i_age']);
        $i_place_birth = test_input($_POST['i_place_birth']);
        $i_nationality = test_input($_POST['i_nationality']);
        $i_skills = test_input($_POST['i_skills']);
        $i_training_seminar = test_input($_POST['i_training_seminar']);

        /*contacts_tbl*/
        $ct_email_address = test_input($_POST['ct_email_address']);
        $ct_mobile_no = test_input($_POST['ct_mobile_no']);

        /*address_tbl*/
        $ad_street = test_input($_POST['ad_street']);
        $ad_barangay = test_input($_POST['ad_barangay']);
        $ad_municipality = test_input($_POST['ad_municipality']);
        $ad_zipcode = test_input($_POST['ad_zipcode']);
        $ad_province = test_input($_POST['ad_province']);

        /*case_tbl*/
        $c_physical_disability = test_input($_POST['c_physical_disability']);
        $c_mental_disability = test_input($_POST['c_mental_disability']);
        $c_criminal_liability = test_input($_POST['c_criminal_liability']);

        /*parent_tbl*/
        $p_father = test_input($_POST['p_father']);
        $p_father_occupation = test_input($_POST['p_father_occupation']);
        $p_mother = test_input($_POST['p_mother']);
        $p_mother_occupation = test_input($_POST['p_mother_occupation']);
        $p_address = test_input($_POST['p_address']);

        /*educational_background_tbl*/
        $eb_elementary = test_input($_POST['eb_elementary']);
        $eb_elem_year = test_input($_POST['eb_elem_year']);
        $eb_secondary = test_input($_POST['eb_secondary']);
        $eb_sec_year = test_input($_POST['eb_sec_year']);
        $eb_tertiary = test_input($_POST['eb_tertiary']);
        $eb_ter_year = test_input($_POST['eb_ter_year']);
        $eb_course_code = test_input($_POST['eb_course_code']);
        $eb_course_description = test_input($_POST['eb_course_description']);
        $eb_year = test_input($_POST['eb_year']);
        $eb_section = test_input($_POST['eb_section']);
        $eb_curriculum = test_input($_POST['eb_curriculum']);
        $eb_id_number = test_input($_POST['eb_id_number']);

        /*emergency_tbl*/
        $em_guardian = test_input($_POST['em_guardian']);
        $em_relationship = test_input($_POST['em_relationship']);
        $em_address = test_input($_POST['em_address']);
        $em_contact = test_input($_POST['em_contact']);

        /*accounts_tbl*/
        $acc_email_address = test_input($_POST['acc_email_address']);
        $acc_password = test_input($_POST['acc_password']);
        $acc_role = "intern";
        $u_reg_date = date("Y-m-d");

        $sql = mysqli_query($conn, "SELECT * FROM intern_tbl INNER JOIN educational_background_tbl ON intern_tbl.i_id = educational_background_tbl.i_id WHERE educational_background_tbl.eb_id_number='$eb_id_number' AND intern_tbl.i_code='$i_code'");

        if(mysqli_num_rows($sql) > 0) {
            echo $output = "User already exist.";  
        } else {

            /* intern_tbl */
            $sql0 = mysqli_query($db, "INSERT INTO intern_tbl (i_code, i_first_name, i_middle_name, i_last_name, i_suffix_name, i_sex, i_civil_status, i_height, i_weight, i_birth_date, i_age, i_place_birth, i_nationality, i_skills, i_training_seminar) 
            VALUES 
            ('$i_code','$i_first_name','$i_middle_name', '$i_last_name','$i_suffix_name', '$i_sex', '$i_civil_status', '$i_height', '$i_weight', '$i_birth_date', '$i_age', '$i_place_birth','$i_nationality', '$i_skills', '$i_training_seminar')");

            $sql1 = mysqli_query($db, "SELECT * FROM intern_tbl WHERE i_code='$i_code'");
            $res1 = mysqli_fetch_assoc($sql1);

            /* accounts_tbl */
            $sql3 = mysqli_query($conn, "INSERT INTO accounts_tbl (acc_email_address, acc_password, acc_role, i_id) 
            VALUES 
            ('$acc_email_address','$acc_password', '$acc_role', '".$res1['i_id']."')");

            // /*educational_background_tbl*/
            // $sql1 = mysqli_query($conn, "INSERT INTO educational_background_tbl (eb_elementary, eb_elem_year, eb_secondary,eb_sec_year, eb_tertiary, eb_ter_year,eb_course_code, eb_course_description, eb_year, eb_section, eb_curriculum, eb_id_number) 
            // VALUES 
            // ('$eb_elementary','$eb_elem_year', '$eb_secondary','$eb_sec_year', '$eb_tertiary' , '$eb_ter_year', '$eb_course_code', '$eb_course_description', '$eb_year', '$eb_section', '$eb_curriculum', '$eb_id_number')");

            // /*case_tbl*/
            // $sql2 = mysqli_query($conn, "INSERT INTO case_tbl (c_physical_disability, c_mental_disability, c_criminal_liability) 
            // VALUES 
            // ('$c_physical_disability','$c_mental_disability', '$c_criminal_liability')");

            // /*parent_tbl*/
            // $sql4 = mysqli_query($conn, "INSERT INTO parent_tbl (p_father, p_father_occupation, p_mother, p_mother_occupation, p_address) 
            // VALUES 
            // ('$p_father','$p_father_occupation', '$p_mother', '$p_mother_occupation', '$p_address')");

            // /*contacts_tbl*/
            // $sql5 = mysqli_query($conn, "INSERT INTO contacts_tbl (ct_email_address, ct_mobile_no) 
            // VALUES 
            // ('$ct_email_address','$ct_mobile_no')");

            // /*emergency_tbl*/
            // $sql6 = mysqli_query($conn, "INSERT INTO emergency_tbl (em_guardian, em_relationship, em_address, em_contact) 
            // VALUES 
            // ('$em_guardian','$em_relationship', '$em_address', '$em_contact')");

            // /*address_tbl*/
            // $sql7 = mysqli_query($conn, "INSERT INTO address_tbl (ad_street, ad_barangay, ad_municipality, ad_zipcode, ad_province) 
            // VALUES 
            // ('$ad_street','$ad_barangay', '$ad_municipality', '$ad_zipcode', '$ad_province')"); 
        }
    }
}
?>