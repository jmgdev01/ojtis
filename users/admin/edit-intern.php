<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];
    $user_id = $_GET['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Account Details - OJT Information System</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php 
    include("include/nav.php"); 
    include("edit-intern-section/update-intern.php");
    include("edit-intern-section/display-intern.php");
    ?>

    <div class="container py-5">

        <div class="row pb-3">
            <div class="col-lg-12">
                <button class="form-btn form-btn-sm btn-dark" onclick="window.location.href='view-intern.php'"><i class="fa fa-arrow-left"></i> Back</button>
            </div>
        </div>

        <div class="card mb-4">
        <div class="card-body pb-3 px-4">
        <h2 class="pb-2"><strong>ACCOUNT DETAILS</strong></h2>
        <form method="post" action="edit-intern.php?user_id=<?php echo $res['acc_id']; ?>" enctype="multipart/form-data"> 
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
                                <label><small><strong>DESCRIPTION </strong></small></label>
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
                                <label><small><strong>DESCRIPTION </strong></small></label><br>
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
                <button class="form-btn form-btn-md btn-blue" type="submit" name="btn_update" id="btn_update">
                    <strong>
                        <i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE
                    </strong>
                </button>
            </div>
        </form> 
        </div>
        </div>

        <div class="card">
        <div class="card-body pb-3 px-4">
        <h2 class="pb-2 pt-1 text-left"><strong>RESET PASSWORD</strong></h2>
        <div class="d-flex justify-content-start pb-3">
            <div class="row">
                <form method="post" action="edit-intern.php?user_id=<?php echo $res['acc_id']; ?>">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <input type="hidden" name="acc_id_reset" value="<?php echo $res['acc_id']; ?>">
                            <div class="input-group-prepend">
                                <button class="btn btn-red btn_reset" id="btn_reset" type="button"><i class="fa fa-qrcode"></i> <strong>GENERATE</strong></button>
                            </div>
                            <input type="text" class="form-control text-center" name="acc_password_reset" id="acc_password_reset" placeholder="e.g. d1O8BpJm" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-blue" type="submit" id="btn_save" name="btn_save"><i class="fa fa-refresh" aria-hidden="true"></i> <strong>RESET</strong></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>

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

        $('#btn_reset').click(function(){
            randomString();
        });

        function randomString() {
            var code = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz0123456789";
                    
            //specify the length for the new string
            var lenString = 8;
            var randomstring = '';

            //loop to select a new character in each iteration
            for (var i=0; i<lenString; i++) {
                var rnum = Math.floor(Math.random() * code.length);
                randomstring += code.substring(rnum, rnum+1);
            }

            //display the generated string 
            $("#acc_password_reset").val(randomstring);
        }
    });
    </script>
</body>
</html>