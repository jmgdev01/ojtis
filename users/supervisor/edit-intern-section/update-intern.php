<?php  
if(isset($_POST['btn_update'])){
     $i_id = $_POST['i_id'];
     $i_first_name = $_POST['i_first_name'];
     $i_middle_name = $_POST['i_middle_name'];
     $i_last_name = $_POST['i_last_name'];
     $i_suffix_name = $_POST['i_suffix_name'];
     $i_sex = $_POST['i_sex'];
     $i_civil_status = $_POST['i_civil_status'];
     $i_height = $_POST['i_height'];
     $i_weight = $_POST['i_weight'];
     $i_birth_date = $_POST['i_birth_date'];
     $i_age = $_POST['i_age'];
     $i_place_birth = $_POST['i_place_birth'];
     $i_nationality = $_POST['i_nationality'];
     $i_comp_knowledge_skills = $_POST['i_comp_knowledge_skills'];
     $i_training_seminar = $_POST['i_training_seminar'];
     $i_work_experience = $_POST['i_work_experience'];
     $i_membership = $_POST['i_membership'];
     $i_character_reference = $_POST['i_character_reference'];
 
     // address_tbl 
     $ad_street = $_POST['ad_street'];
     $ad_barangay = $_POST['ad_barangay'];
     $ad_municipality = $_POST['ad_municipality'];
     $ad_zipcode = $_POST['ad_zipcode'];
     $ad_province = $_POST['ad_province'];
 
     // contact_tbl
     $ct_email_address = $_POST['ct_email_address'];
     $ct_mobile_no = $_POST['ct_mobile_no'];
 
     // case_tbl
     $c_physical_disability = $_POST['c_physical_disability'];
     $c_mental_disability = $_POST['c_mental_disability'];
     $c_criminal_liability = $_POST['c_criminal_liability'];
 
     // parent_tbl
     $p_father = $_POST['p_father'];
     $p_father_occupation = $_POST['p_father_occupation'];
     $p_mother = $_POST['p_mother'];
     $p_mother_occupation = $_POST['p_mother_occupation'];
     $p_address = $_POST['p_address'];
 
     // educational_background-table
     $eb_elementary = $_POST['eb_elementary'];
     $eb_elem_year = $_POST['eb_elem_year'];
     $eb_secondary = $_POST['eb_secondary'];
     $eb_sec_year = $_POST['eb_sec_year'];
     $eb_shs = $_POST['eb_shs'];
     $eb_shs_year = $_POST['eb_shs_year'];
     $eb_tertiary = $_POST['eb_tertiary'];
     $eb_ter_year = $_POST['eb_ter_year'];
     $eb_course_code = $_POST['eb_course_code'];
     $eb_course_description = $_POST['eb_course_description'];
     $eb_year = $_POST['eb_year'];
     $eb_section = $_POST['eb_section'];
     $eb_curriculum = $_POST['eb_curriculum'];
     $eb_id_number = $_POST['eb_id_number'];
 
     // emergency_tbl
     $em_guardian = $_POST['em_guardian'];
     $em_relationship = $_POST['em_relationship'];
     $em_address = $_POST['em_address'];
     $em_contact = $_POST['em_contact'];
 
     // image
     $file_name = $_FILES['profile_image']['name'];
     $file_tmp = $_FILES['profile_image']['tmp_name'];
     $pi = $_POST['pi'];
  
     if (empty($i_first_name) || empty($i_last_name) || empty($i_sex) || empty($i_civil_status) || empty($i_height) || empty($i_weight) || empty($i_birth_date) || empty($i_age) || empty($i_place_birth) || empty($i_nationality) || empty($ad_barangay) || empty($ad_municipality) || empty($ad_zipcode) || empty($ad_province) || empty($ct_mobile_no) || empty($p_father) || empty($p_father_occupation) || empty($p_mother) || empty($p_mother_occupation) || empty($p_address) || empty($eb_elementary) || empty($eb_elem_year) || empty($eb_secondary) || empty($eb_sec_year) || empty($eb_shs) || empty($eb_shs_year) || empty($eb_tertiary) || empty($eb_ter_year) || empty($eb_course_code) || empty($eb_course_description) || empty($eb_year) || empty($eb_section) || empty($eb_curriculum) || empty($eb_id_number) || empty($i_comp_knowledge_skills) || empty($i_training_seminar) || empty($em_guardian) || empty($em_relationship) || empty($em_address) || empty($em_contact) || empty($pi) && empty($file_name)) {
         echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                 All fields are required!
                 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                     <span aria-hidden='true'>&times;</span>
                 </button>
             </div>
             ";
    } else {
         $email_regex = "/([a-zA-Z0-9!#$%&’?^_`~-])+@([a-zA-Z0-9-])+(.com)+/";
        if(preg_match($email_regex, $ct_email_address)){
             
             // Upload image from your computer to the project directory
             move_uploaded_file($file_tmp, "../../assets/profile/intern/" . $file_name);
             $img_store = "../../assets/profile/intern/" . $_FILES['profile_image']['name'];
 
             $image = '';
             if($file_name != '') {
                 $image = $img_store;
             } else {
                 $image = $pi;
             }
 
             // intern_tbl query
             $sqlintern = mysqli_query($db, "UPDATE intern_tbl SET i_first_name='$i_first_name', i_middle_name='$i_middle_name', i_last_name='$i_last_name', i_suffix_name='$i_suffix_name', i_img='$image', i_sex='$i_sex', i_civil_status='$i_civil_status', i_height='$i_height', i_weight='$i_weight', i_birth_date='$i_birth_date', i_age='$i_age', i_place_birth='$i_place_birth', i_nationality='$i_nationality', i_comp_knowledge_skills='$i_comp_knowledge_skills', i_membership='$i_membership',i_character_reference='$i_character_reference', i_training_seminar='$i_training_seminar' WHERE i_id='$i_id'");
 
             // address_tbl query
             $sqladdress = mysqli_query($db, "UPDATE address_tbl SET ad_street='$ad_street', ad_barangay='$ad_barangay',   ad_municipality='$ad_municipality', ad_zipcode='$ad_zipcode', ad_province='$ad_province' WHERE i_id='$i_id'");
 
             // contact_query
             $sqlcontact = mysqli_query($db, "UPDATE contacts_tbl SET ct_email_address='$ct_email_address', ct_mobile_no='$ct_mobile_no' WHERE i_id='$i_id'");
 
             // case_query
             $sqlcase = mysqli_query($db, "UPDATE case_tbl SET c_physical_disability='$c_physical_disability', c_mental_disability='$c_mental_disability', c_criminal_liability='$c_criminal_liability' WHERE i_id='$i_id'");
             
             // parent_query
             $sqlparent = mysqli_query($db, "UPDATE parent_tbl SET p_father='$p_father', p_father_occupation='$p_father_occupation', p_mother='$p_mother', p_mother_occupation='$p_mother_occupation', p_address='$p_address' WHERE i_id='$i_id'");
 
             // educational_background_query
             $sqleducation = mysqli_query($db, "UPDATE educational_background_tbl SET eb_elementary='$eb_elementary', eb_elem_year='$eb_elem_year', eb_secondary='$eb_secondary', eb_sec_year='$eb_sec_year', eb_shs='$eb_shs', eb_shs_year='$eb_shs_year',  eb_tertiary='$eb_tertiary', eb_ter_year='$eb_ter_year', eb_course_code='$eb_course_code', eb_course_description='$eb_course_description', eb_year='$eb_year', eb_section='$eb_section', eb_curriculum='$eb_curriculum', eb_id_number='$eb_id_number' WHERE i_id='$i_id'");
 
             // emergency_query
             $sqleducation = mysqli_query($db, "UPDATE emergency_tbl SET em_guardian='$em_guardian', em_relationship='$em_relationship', em_address='$em_address', em_contact='$em_contact' WHERE i_id='$i_id'");
 
             // Alert after successful registration
             echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
                     Profile updated successfully!
                     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                         <span aria-hidden='true'>&times;</span>
                     </button>
                 </div>";
            
        } else {
             // Alert when alternative email is invalid
             echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                     Invalid alternative email address!
                     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                         <span aria-hidden='true'>&times;</span>
                     </button>
                 </div>";
        }
    }
}

if(isset($_POST['btn_save'])){
    $acc_id = $_POST['acc_id_reset'];
    $acc_password_reset = $_POST['acc_password_reset'];

    if (strlen($acc_password_reset) < 6) {
        echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                Password length is less than 6 characters!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
    } else {
        // Reset password
        $sql2 = mysqli_query($db, "UPDATE accounts_tbl SET acc_password='$acc_password_reset' WHERE acc_id='$acc_id'");

        echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
                Password successfully reset!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
    }
}
?>