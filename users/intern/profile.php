<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile - OJT Information System</title>
    <?php 
        include("include/style.php"); 
    ?>
</head>
<body id="page-top">
    <?php include("include/nav.php"); ?>
    <div class="container py-5">
        <h3 class="pb-2"><strong>PROFILE</strong></h3>

        <div class="accordion" id="c_body">
            <div class="card">
                <div class="card-header c_header" data-toggle="collapse" data-target="#c1">
                    <div>1</div><h5><strong>PERSONAL INFORMATION</strong></h5>
                </div>

                <div id="c1" class="collapse show"  data-parent="#c_body">
                    <div class="card-body">
                    <div class="row">
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
                            <label><small><strong>PERSONAL EMAIL ADDRESS <span class="text-danger">*</span></strong></small></label>
                            <input type="email" id="ct_email_address" class="form-control" placeholder="e.g. juan.cruz@gmail.com">
                        </div>
                        <div class="form-group col-lg-5 col-md-5">
                            <label><small><strong>CONTACT NUMBER <span class="text-danger">*</span></strong></small></label>
                            <input type="text" id="ct_mobile_no" class="form-control" placeholder="e.g. 09123456789">
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
                    </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header c_header" data-toggle="collapse" data-target="#c6">
                    <div>7</div><h5><strong>SKILLS</strong></h5>
                </div>

                <div id="c6" class="collapse"  data-parent="#c_body">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label>
                            <textarea type="text" id="i_skills" rows="5" class="form-control" placeholder="e.g. Playing Basketball, Developing Applications, etc."></textarea>
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
                    <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label>
                            <textarea type="text" id="i_training_seminar" rows="5" class="form-control" placeholder="e.g. Web Development, Computer Hardware Servicing, etc."></textarea>
                            <label><small>Separate each <strong>training</strong> and <strong>seminar</strong> with <code>semicolon ( ; )</code></small></label>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header c_header" data-toggle="collapse" data-target="#c8">
                    <div>9</div><h5><strong>EMERGENCY CONTACT</strong></h5>
                </div>

                <div id="c8" class="collapse"  data-parent="#c_body">
                    <div class="card-body">
                    <div class="row">
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
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group pt-3 text-center">
            <button class="form-btn form-btn-md btn-blue" id="btn_save"><strong>Save</strong></button>
        </div>
        
    </div>
    <?php 
        include("include/script.php"); 
    ?>
    <script>
        
    </script>
</body>
</html>
