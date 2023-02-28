<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    $manage_intern_id = $_GET['manage_intern_id'];
    if(isset($_POST['update'])){
    
    $i_id =$_POST['i_id'];
     // intern_tbl
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
  
     if (empty($i_first_name) || empty($i_last_name) || empty($i_sex) || empty($i_civil_status) || empty($i_height) || empty($i_weight) || empty($i_birth_date) || empty($i_age) || empty($i_place_birth) || empty($i_nationality) || empty($i_character_reference) || empty($ad_barangay) || empty($ad_municipality) || empty($ad_zipcode) || empty($ad_province) || empty($ct_mobile_no) || empty($p_father) || empty($p_father_occupation) || empty($p_mother) || empty($p_mother_occupation) || empty($p_address) || empty($eb_elementary) || empty($eb_elem_year) || empty($eb_secondary) || empty($eb_sec_year) || empty($eb_shs) || empty($eb_shs_year) || empty($eb_tertiary) || empty($eb_ter_year) || empty($eb_course_code) || empty($eb_course_description) || empty($eb_year) || empty($eb_section) || empty($eb_curriculum) || empty($eb_id_number) || empty($i_comp_knowledge_skills) || empty($i_training_seminar) || empty($em_guardian) || empty($em_relationship) || empty($em_address) || empty($em_contact) || empty($pi) && empty($file_name)) {
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
             move_uploaded_file($file_tmp, "../../assets/profile/" . $file_name);
             $img_store = "../../assets/profile/" . $_FILES['profile_image']['name'];
 
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

    $sql = mysqli_query($db, "SELECT * FROM accounts_tbl 
    INNER JOIN intern_tbl ON accounts_tbl.i_id = intern_tbl.i_id 
    INNER JOIN address_tbl ON intern_tbl.i_id = address_tbl.i_id 
    INNER JOIN contacts_tbl ON intern_tbl.i_id = contacts_tbl.i_id 
    INNER JOIN case_tbl ON intern_tbl.i_id = case_tbl.i_id 
    INNER JOIN parent_tbl ON intern_tbl.i_id = parent_tbl.i_id
    INNER JOIN educational_background_tbl ON intern_tbl.i_id = educational_background_tbl.i_id 
    INNER JOIN emergency_tbl ON intern_tbl.i_id = emergency_tbl.i_id 
    WHERE intern_tbl.i_code='$manage_intern_id'");
    $res = mysqli_fetch_assoc($sql);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Intern</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php include("include/nav.php"); ?>
    <div class="container py-5">
        <h2 class="pb-2"><strong>PROFILE</strong></h2>

        <form method="post" action="edit_intern.php?manage_intern_id=<?php echo $res['i_code']; ?>" enctype="multipart/form-data"> 
            <div class="accordion" id="c_body"> 
                <input type="hidden" name="i_id" value="<?php echo $res['i_id']; ?>">
                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c1">
                        <div>1</div><h5><strong>PERSONAL INFORMATION</strong></h5>
                    </div>

                    <div id="c1" class="collapse show"  data-parent="#c_body">
                        <div class="card-body"> 
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-md-12 pb-3">
                                            <label><small><strong>PROFILE IMAGE</strong></small></label>
                                            <div class="col-lg-12 profile_img_con">
                                                <img id="image_preview" src="<?php echo $res['i_img']; ?>">
                                            </div>
                                            <input type="hidden" name="pi" value="<?php echo $res['i_img']; ?>">
                                            <input type="file" name="profile_image" id="profile_image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="form-group col-lg-5 col-md-5">
                                            <label><small><strong>FIRST NAME <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="i_first_name" name="i_first_name" value="<?php echo $res['i_first_name']; ?>" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3">
                                            <label><small><strong>MIDDLE NAME</strong></small></label>
                                            <input type="text" id="i_middle_name" name="i_middle_name" value="<?php echo $res['i_middle_name']; ?>" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label><small><strong>LAST NAME <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="i_last_name" name="i_last_name" value="<?php echo $res['i_last_name']; ?>" class="form-control" placeholder="e.g. Cruz">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label><small><strong>EXT.</strong></small></label>
                                            <select class="form-control" id="i_suffix_name" name="i_suffix_name">
                                                <option value="<?php echo $res['i_suffix_name']; ?>">Active (<?php echo $res['i_suffix_name']; ?>)</option>
                                                <option value="">- Select -</option>
                                                <option value="Jr.">Jr.</option>
                                                <option value="Sr.">Sr.</option>
                                                <option value="III">III</option>
                                                <option value="IV">IV</option>
                                                <option value="V">V</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label><small><strong>SEX <span class="text-danger">*</span></strong></small></label>
                                            <select class="form-control" id="i_sex" name="i_sex">
                                                <option value="<?php echo $res['i_sex']; ?>">Active (<?php echo $res['i_sex']; ?>)</option>
                                                <option value="">- Select -</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label><small><strong>STATUS <span class="text-danger">*</span></strong></small></label>
                                            <select class="form-control" id="i_civil_status" name="i_civil_status">
                                                <option value="<?php echo $res['i_civil_status']; ?>">Active (<?php echo $res['i_civil_status']; ?>)</option>
                                                <option value="">- Select -</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widow">Widow</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label><small><strong>HEIGHT <span class="text-danger">*</span></strong></small></label>
                                            <input type="number" id="i_height" name="i_height" value="<?php echo $res['i_height']; ?>" class="form-control" placeholder="cm" min="1">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label><small><strong>WEIGHT <span class="text-danger">*</span></strong></small></label>
                                            <input type="number" id="i_weight" name="i_weight" value="<?php echo $res['i_weight']; ?>" class="form-control" placeholder="kg" min="1">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label><small><strong>AGE <span class="text-danger">*</span></strong></small></label>
                                            <input type="number" id="i_age" name="i_age" value="<?php echo $res['i_age']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label><small><strong>DATE OF BIRTH <span class="text-danger">*</span></strong></small></label>
                                            <input type="date" id="i_birth_date" name="i_birth_date" value="<?php echo $res['i_birth_date']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-5 col-md-5">
                                            <label><small><strong>PLACE OF BIRTH <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="i_place_birth" name="i_place_birth" value="<?php echo $res['i_place_birth']; ?>" class="form-control" placeholder="e.g. Jaro, Iloilo">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3">
                                            <label><small><strong>NATIONALITY <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="i_nationality" name="i_nationality" value="<?php echo $res['i_nationality']; ?>" class="form-control" placeholder="e.g. Filipino">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c2">
                        <div>2</div><h5><strong>ADDRESS DETAILS</strong></h5>
                    </div>

                    <div id="c2" class="collapse"  data-parent="#c_body">
                        <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6">
                                <label><small><strong>STREET</strong></small></label>
                                <input type="text" id="ad_street" name="ad_street" value="<?php echo $res['ad_street']; ?>" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label><small><strong>BARANGAY <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="ad_barangay" name="ad_barangay" value="<?php echo $res['ad_barangay']; ?>" class="form-control" placeholder="e.g. New Poblacion">
                            </div>
                            <div class="form-group col-lg-5 col-md-5">
                                <label><small><strong>MUNICIPALITY <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="ad_municipality" name="ad_municipality" value="<?php echo $res['ad_municipality']; ?>" class="form-control" placeholder="e.g. Buenavista">
                            </div>
                            <div class="form-group col-lg-3 col-md-3">
                                <label><small><strong>ZIP CODE <span class="text-danger">*</span></strong></small></label>
                                <input type="number" id="ad_zipcode" name="ad_zipcode" value="<?php echo $res['ad_zipcode']; ?>" class="form-control" placeholder="e.g. 5044">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label><small><strong>PROVINCE <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="ad_province" name="ad_province" value="<?php echo $res['ad_province']; ?>" class="form-control" placeholder="e.g. Guimaras">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c2-1">
                        <div>3</div><h5><strong>CONTACT INFORMATION</strong></h5>
                    </div>

                    <div id="c2-1" class="collapse"  data-parent="#c_body">
                        <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-7 col-md-7">
                                <label><small><strong>PERSONAL EMAIL ADDRESS</strong></small></label>
                                <input type="email" id="ct_email_address" name="ct_email_address" value="<?php echo $res['ct_email_address']; ?>" class="form-control" placeholder="e.g. juan.cruz@gmail.com">
                            </div>
                            <div class="form-group col-lg-5 col-md-5">
                                <label><small><strong>CONTACT NUMBER <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="ct_mobile_no" name="ct_mobile_no" value="<?php echo $res['ct_mobile_no']; ?>" class="form-control" placeholder="e.g. 09123456789">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c3">
                        <div>4</div><h5><strong>DISABILITY</strong></h5>
                    </div>

                    <div id="c3" class="collapse"  data-parent="#c_body">
                        <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6">
                                <label><small><strong>PHYSICAL DISABILITY</strong></small></label>
                                <input type="text" id="c_physical_disability" name="c_physical_disability" value="<?php echo $res['c_physical_disability']; ?>" class="form-control" placeholder="e.g. N/A">
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label><small><strong>MENTAL DISABILITY</strong></small></label>
                                <input type="text" id="c_mental_disability" name="c_mental_disability" value="<?php echo $res['c_mental_disability']; ?>" class="form-control" placeholder="e.g. N/A">
                            </div>
                            
                            <div class="form-group col-lg-12 pt-3">
                                <h3><strong>LIABILITY</strong></h3>
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label><small><strong>CRIMINAL LIABILITY</strong></small></label>
                                <input type="text" id="c_criminal_liability" name="c_criminal_liability" value="<?php echo $res['c_criminal_liability']; ?>" class="form-control" placeholder="e.g. N/A">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c4">
                        <div>5</div><h5><strong>PARENT INFORMATION</strong></h5>
                    </div>

                    <div id="c4" class="collapse"  data-parent="#c_body">
                        <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-8 col-md-7">
                                <label><small><strong>FATHER'S NAME <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="p_father" name="p_father" value="<?php echo $res['p_father']; ?>" class="form-control" placeholder="e.g. Carlos Garcia Cruz">
                            </div>
                            <div class="form-group col-lg-4 col-md-5">
                                <label><small><strong>OCCUPATION <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="p_father_occupation" name="p_father_occupation" value="<?php echo $res['p_father_occupation']; ?>" class="form-control" placeholder="e.g. Laborer">
                            </div>
                            <div class="form-group col-lg-8 col-md-7">
                                <label><small><strong>MOTHER'S NAME <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="p_mother" name="p_mother" value="<?php echo $res['p_mother']; ?>" class="form-control" placeholder="e.g. Maria Santos Cruz">
                            </div>
                            <div class="form-group col-lg-4 col-md-5">
                                <label><small><strong>OCCUPATION <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="p_mother_occupation" name="p_mother_occupation" value="<?php echo $res['p_mother_occupation']; ?>" class="form-control" placeholder="e.g. Housewife">
                            </div>
                            <div class="form-group col-lg-12 col-md-12">
                                <label><small><strong>ADDRESS <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="p_address" name="p_address" value="<?php echo $res['p_address']; ?>" class="form-control" placeholder="e.g. New Poblacion, Buenavista, Guimaras">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c5">
                        <div>6</div><h5><strong>EDUCATIONAL BACKGROUND</strong></h5>
                    </div>

                    <div id="c5" class="collapse"  data-parent="#c_body">
                        <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-8 col-md-8">
                                <label><small><strong>ELEMENTARY <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_elementary" name="eb_elementary" value="<?php echo $res['eb_elementary']; ?>" class="form-control" placeholder="e.g. Buenavista Central School">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label><small><strong>YEAR GRADUATED <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_elem_year" name="eb_elem_year" value="<?php echo $res['eb_elem_year']; ?>" class="form-control" placeholder="e.g. 2005-2011">
                            </div>
                            <div class="form-group col-lg-8 col-md-8">
                                <label><small><strong>SECONDARY / HIGH SCHOOL <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_secondary" name="eb_secondary" value="<?php echo $res['eb_secondary']; ?>" class="form-control" placeholder="e.g. Buenavista National School">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label><small><strong>YEAR GRADUATED <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_sec_year" name="eb_sec_year" value="<?php echo $res['eb_sec_year']; ?>" class="form-control" placeholder="e.g. 2011-2015">
                            </div>
                            <div class="form-group col-lg-8 col-md-8">
                                <label><small><strong>SENIOR HIGH SCHOOL <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_shs" name="eb_shs" value="<?php echo $res['eb_shs']; ?>" class="form-control" placeholder="e.g. Buenavista National School">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label><small><strong>YEAR GRADUATED <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_shs_year" name="eb_shs_year" value="<?php echo $res['eb_shs_year']; ?>" class="form-control" placeholder="e.g. 2015-2017">
                            </div>
                            <div class="form-group col-lg-8 col-md-8">
                                <label><small><strong>TERTIARY / COLLEGE <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_tertiary" name="eb_tertiary" value="<?php echo $res['eb_tertiary']; ?>" class="form-control" placeholder="e.g. Guimaras State University">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label><small><strong>YEAR GRADUATED <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_ter_year" name="eb_ter_year" value="<?php echo $res['eb_ter_year']; ?>" class="form-control" placeholder="e.g. 2017-2021">
                            </div>
                            <div class="form-group col-lg-3 col-md-3">
                                <label><small><strong>COURSE CODE <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_course_code" name="eb_course_code" value="<?php echo $res['eb_course_code']; ?>" class="form-control" placeholder="e.g. BSIT">
                            </div>
                            <div class="form-group col-lg-5 col-md-5">
                                <label><small><strong>COURSE DESCRIPTION <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_course_description" name="eb_course_description" value="<?php echo $res['eb_course_description']; ?>" class="form-control" placeholder="e.g. BS in Information Technology">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label><small><strong>ID NUMBER <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_id_number" name="eb_id_number" value="<?php echo $res['eb_id_number']; ?>" class="form-control" placeholder="e.g. ABC-1-0001">
                            </div>

                            <div class="form-group col-lg-3 col-md-4">
                                <label><small><strong>YEAR <span class="text-danger">*</span></strong></small></label>
                                <select class="form-control" id="eb_year" name="eb_year">
                                    <option value="<?php echo $res['eb_year']; ?>">Active (<?php echo $res['eb_year']; ?> year)</option>
                                    <option value="">- Select -</option>
                                    <option value="1">1st Year</option>
                                    <option value="2">2nd Year</option>
                                    <option value="3">3rd Year</option>
                                    <option value="4">4th Year</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-3 col-md-2">
                                <label><small><strong>SECTION <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_section" name="eb_section" value="<?php echo $res['eb_section']; ?>" class="form-control" placeholder="e.g. A">
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label><small><strong>CURRICULUM <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="eb_curriculum" name="eb_curriculum" value="<?php echo $res['eb_curriculum']; ?>" class="form-control" placeholder="e.g. BSIT22">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c6">
                        <div>7</div><h5><strong>COMPUTER KNOWLEDGE AND SKILLS</strong></h5>
                    </div>

                    <div id="c6" class="collapse"  data-parent="#c_body">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label>
                                <textarea type="text" id="i_comp_knowledge_skills" name="i_comp_knowledge_skills" rows="5" class="form-control" placeholder="e.g. Playing Basketball, Developing Applications, etc."><?php echo $res['i_comp_knowledge_skills'] ?></textarea>
                                <label><small>Separate each <strong>skill</strong> with <code>semicolon ( ; )</code></small></label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c7">
                        <div>8</div><h5><strong>TRAININGS AND SEMINARS</strong></h5>
                    </div>

                    <div id="c7" class="collapse"  data-parent="#c_body">
                        <div class="card-body pb-0">
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12">
                                <label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label><br>
                                <label><small>Each training should include <strong>Title ( Sponsor )</strong>.</small></label>
                                <textarea type="text" id="i_training_seminar" name="i_training_seminar" rows="5" class="form-control" placeholder="e.g. Python Programming (DICT Region IV); User Experience Design (STI Manila); etc."><?php echo $res['i_training_seminar']; ?></textarea>
                                <label><small>Separate each <strong>training</strong> or <strong>seminar</strong> with <code>semicolon ( ; )</code></small></label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c8">
                        <div>9</div><h5><strong>WORK EXPERIENCE</strong></h5>
                    </div>

                    <div id="c8" class="collapse"  data-parent="#c_body">
                        <div class="card-body pb-0">
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12">
                                <label><small><strong>DESCRIPTION </strong></small></label><br>
                                <label><small>Each work experience should include <strong>Job Description - Company/Agency ( Start and End Date )</strong>.</small></label>
                                <textarea type="text" id="i_work_experience" name="i_work_experience" rows="5" class="form-control" placeholder="e.g. Encoder - PSA (January 22 to March 2023); etc."><?php echo $res['i_work_experience']; ?></textarea>
                                <label><small>Separate each <strong>work experience</strong> with <code>semicolon ( ; )</code></small></label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c9">
                        <div>10</div><h5><strong>MEMBERSHIP</strong></h5>
                    </div>

                    <div id="c9" class="collapse"  data-parent="#c_body">
                        <div class="card-body pb-0">
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12">
                                <label><small><strong>DESCRIPTION </strong></small></label><br>
                                <label><small>Each membership should include <strong>Role - Organization ( Start and End Date )</strong>.</small></label>
                                <textarea type="text" id="i_membership" name="i_membership" rows="5" class="form-control" placeholder="e.g. Python Programming (DICT Region IV); User Experience Design (STI Manila); etc."><?php echo $res['i_membership']; ?></textarea>
                                <label><small>Separate each <strong>membership</strong> with <code>semicolon ( ; )</code></small></label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c9">
                        <div>11</div><h5><strong>CHARACTER REFERENCE</strong></h5>
                    </div>

                    <div id="c9" class="collapse"  data-parent="#c_body">
                        <div class="card-body pb-0">
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12">
							<label><small>Each reference should include <strong>Full Name ( Designation, Company/Agency )</strong>.</small></label>
							<textarea type="text" id="i_character_reference" name="i_character_reference" rows="5" class="form-control" placeholder="e.g. Pedro Jacinto (ICT Directory, ICT Office); etc."><?php echo $res['i_character_reference']; ?></textarea>
							<label><small>Separate each <strong>reference</strong> with <code>semicolon ( ; )</code></small></label>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header c_header" data-toggle="collapse" data-target="#c10">
                        <div>12</div><h5><strong>EMERGENCY CONTACT</strong></h5>
                    </div>

                    <div id="c10" class="collapse"  data-parent="#c_body">
                        <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-8 col-md-8">
                                <label><small><strong>GUARDIAN <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="em_guardian" name="em_guardian" value="<?php echo $res['em_guardian']; ?>" class="form-control" placeholder="e.g. Maria Santos Cruz">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label><small><strong>RELATIONSHIP <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="em_relationship" name="em_relationship" value="<?php echo $res['em_relationship']; ?>" class="form-control" placeholder="e.g. Mother">
                            </div>
                            <div class="form-group col-lg-8 col-md-8">
                                <label><small><strong>ADDRESS <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="em_address" name="em_address" value="<?php echo $res['em_address']; ?>" class="form-control" placeholder="e.g. New Poblacion, Buenavista, Guimaras">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label><small><strong>CONTACT NUMBER <span class="text-danger">*</span></strong></small></label>
                                <input type="text" id="em_contact" name="em_contact" value="<?php echo $res['em_contact']; ?>" class="form-control" placeholder="e.g. 09123456789">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group pt-3 text-center">
                <button class="form-btn form-btn-md btn-blue" type="submit" name="update" id="update">
                    <strong>
                        <i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE
                    </strong>
                </button>
            </div>
        </form> 
    </div>
    <?php include("include/script.php"); ?>
    <script>
    $(document).ready(function() {

        $("#msg_alert").delay(3000).fadeOut();
        
        // Preview the image before uploading
        $("#profile_image").change(function() {
            readURL(this);
        });
        
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image_preview').attr('src', e.target.result);
                    $('#image_preview').show();
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    });
    </script>
</body>
</html>