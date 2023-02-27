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
        $sql_init = mysqli_query($db, "SELECT MAX(i_id+1) AS max_i_id FROM intern_tbl");
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
        $i_comp_knowledge_skills = test_input($_POST['i_comp_knowledge_skills']);
        $i_training_seminar = test_input($_POST['i_training_seminar']);
        $i_work_experience = test_input($_POST['i_work_experience']);
        $i_membership = test_input($_POST['i_membership']);
        $i_character_reference = test_input($_POST['i_character_reference']);

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
        $eb_shs = test_input($_POST['eb_shs']);
        $eb_shs_year = test_input($_POST['eb_shs_year']);
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
        $acc_date_reg = date("Y-m-d");

        $sql = mysqli_query($db, "SELECT * FROM intern_tbl INNER JOIN accounts_tbl ON intern_tbl.i_id = accounts_tbl.i_id WHERE accounts_tbl.acc_email_address='$acc_email_address'");

        if(mysqli_num_rows($sql) > 0) {
            echo $output = "User already exist.";  
        } else {

            /* intern_tbl */
            $sql0 = mysqli_query($db, "INSERT INTO intern_tbl (i_code, i_first_name, i_middle_name, i_last_name, i_suffix_name, i_sex, i_civil_status, i_height, i_weight, i_birth_date, i_age, i_place_birth, i_nationality, i_comp_knowledge_skills, i_training_seminar, i_work_experience, i_membership, i_character_reference) VALUES ('$i_code', '$i_first_name', '$i_middle_name', '$i_last_name', '$i_suffix_name', '$i_sex', '$i_civil_status', '$i_height', '$i_weight', '$i_birth_date', '$i_age', '$i_place_birth', '$i_nationality', '$i_comp_knowledge_skills', '$i_training_seminar', '$i_work_experience', '$i_membership', '$i_character_reference')");

            $sql1 = mysqli_query($db, "SELECT * FROM intern_tbl WHERE i_code='$i_code'");
            $res1 = mysqli_fetch_assoc($sql1);
            $insert_i_code = $res1['i_id'];

            /* accounts_tbl */
            $sql3 = mysqli_query($db, "INSERT INTO accounts_tbl (acc_email_address, acc_password, acc_role, i_id, acc_date_reg) VALUES ('$acc_email_address','$acc_password', '$acc_role', '$insert_i_code', '$acc_date_reg')");

            /* address_tbl */
            $sql4 = mysqli_query($db, "INSERT INTO address_tbl (ad_street, ad_barangay, ad_municipality, ad_zipcode, ad_province, i_id) VALUES ('$ad_street', '$ad_barangay', '$ad_municipality', '$ad_zipcode', '$ad_province', '$insert_i_code')"); 

            /* contacts_tbl */
            $sql5 = mysqli_query($db, "INSERT INTO contacts_tbl (ct_email_address, ct_mobile_no, i_id) VALUES ('$ct_email_address','$ct_mobile_no', '$insert_i_code')");

            /* parent_tbl */
            $sql6 = mysqli_query($db, "INSERT INTO parent_tbl (p_father, p_father_occupation, p_mother, p_mother_occupation, p_address, i_id) VALUES ('$p_father', '$p_father_occupation', '$p_mother', '$p_mother_occupation', '$p_address', '$insert_i_code')");

            /* educational_background_tbl */
            $sql7 = mysqli_query($db, "INSERT INTO educational_background_tbl (eb_elementary, eb_elem_year, eb_secondary, eb_sec_year, eb_shs, eb_shs_year, eb_tertiary, eb_ter_year, eb_course_code, eb_course_description, eb_year, eb_section, eb_curriculum, eb_id_number, i_id) VALUES ('$eb_elementary','$eb_elem_year', '$eb_secondary','$eb_sec_year', '$eb_shs','$eb_shs_year', '$eb_tertiary' , '$eb_ter_year', '$eb_course_code', '$eb_course_description', '$eb_year', '$eb_section', '$eb_curriculum', '$eb_id_number', '$insert_i_code')");

            /* case_tbl */
            $sql8 = mysqli_query($db, "INSERT INTO case_tbl (c_physical_disability, c_mental_disability, c_criminal_liability, i_id) VALUES ('$c_physical_disability', '$c_mental_disability', '$c_criminal_liability', '$insert_i_code')");

            /* emergency_tbl */
            $sql10 = mysqli_query($db, "INSERT INTO emergency_tbl (em_guardian, em_relationship, em_address, em_contact, i_id) VALUES ('$em_guardian','$em_relationship', '$em_address', '$em_contact', '$insert_i_code')");

            $sql11 = mysqli_query($db, "SELECT * FROM intern_tbl INNER JOIN accounts_tbl ON intern_tbl.i_id = accounts_tbl.i_id WHERE intern_tbl.i_id='$insert_i_code'");

            if(mysqli_num_rows($sql11) > 0){
                while($res11 = mysqli_fetch_assoc($sql11)){

                    $acc_id1 = $res11['acc_id']; 
                    $acc_email_address1 = $res11['acc_email_address'];
                    $acc_role1 = $res11['acc_role'];
                    
                    ini_set('session.cookie_lifetime','31536000');
                    session_start();
                    $_SESSION['acc_id'] = $acc_id1;
                    $_SESSION['acc_email_address'] = $acc_email_address1;
                    $_SESSION['acc_role'] = $acc_role1;
                }
                echo $output = 'intern';
            }
        }
    }
}
?>
