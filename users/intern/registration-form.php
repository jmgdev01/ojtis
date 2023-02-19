<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    $sql = mysqli_query($db, "SELECT * FROM accounts_tbl 
    INNER JOIN intern_tbl ON accounts_tbl.i_id = intern_tbl.i_id 
    INNER JOIN address_tbl ON intern_tbl.i_id = address_tbl.i_id 
    INNER JOIN contacts_tbl ON intern_tbl.i_id = contacts_tbl.i_id 
    INNER JOIN case_tbl ON intern_tbl.i_id = case_tbl.i_id 
    INNER JOIN parent_tbl ON intern_tbl.i_id = parent_tbl.i_id
    INNER JOIN educational_background_tbl ON intern_tbl.i_id = educational_background_tbl.i_id 
    INNER JOIN emergency_tbl ON intern_tbl.i_id = emergency_tbl.i_id 
    WHERE accounts_tbl.acc_id='$acc_id'");
    $res = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registration Form - OJT Information System</title>
    <?php 
        include("include/style.php"); 
    ?>
</head>
<body id="page-top">
    <?php include("include/nav.php"); ?>
    <div class="container py-5">
        <!-- <h3 class="pb-2 d_hide"><strong>REGISTRATION FORM</strong></h3> -->
        <div class="col-lg-12 text-left pb-3">
            <button class="form-btn form-btn-sm btn-teal d_hide" onclick="window.print()"><strong><i class="fa fa-print"></i> PRINT</strong></button>
        </div>

        <div class="row registration_form px-5">
            <div class="col-lg-12 doc_header">
                <img src="../../assets/header/doc-header.png" alt="">
            </div>
            <div class="col-lg-12 text-center pt-2 pb-2 doc_sub_header">
                <h5><strong>COLLEGE OF SCIENCE AND TECHNOLOGY</strong></h5>
                <h6>INFORMATION TECHNOLOGY / INFORMATION SYSTEMS PROGRAM</h6>
            </div>
            <div class="col-lg-12 text-center doc_title pt-3">
                <h6><strong>ON-THE-JOB TRAINING</strong></h6>
                <h3><strong>REGISTRATION FORM</strong></h3>
            </div>

            <div class="col-lg-12 pt-3 doc_body">
                <h5><strong>PERSONAL INFORMATION</strong></h5>
                <div class="row pb-3">
                    <div class="col-8">
                       <div class="text_stretch">
                            <strong>Full Name:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['i_last_name']." ".$res['i_suffix_name']; ?> ,</span>
                                <span><?php echo $res['i_first_name']; ?></span>
                                <span>  
                                <?php if($res['i_middle_name'] != ''){
                                    echo $res['i_middle_name'];
                                } else {
                                    echo "N/A";
                                }
                                ?></span>
                            </div>
                       </div>
                       <div class="text_stretch">
                            <strong class="pr-5 mr-4"></strong>
                            <div class="text_tag">
                                <small><i>Last Name</i></small>
                                <small><i>First Name</i></small>
                                <small><i>Middle Name</i></small>
                            </div>
                       </div>
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <strong>Civil Status:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['i_civil_status']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-2">
                       <div class="text_stretch">
                            <strong>Age:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['i_age']; ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-3">
                       <div class="text_stretch">
                            <strong>Sex:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['i_sex']; ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <strong>Height ( cm ):</strong>
                            <div class="text_underline">
                                <span><?php echo $res['i_height']; ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-3">
                       <div class="text_stretch">
                            <strong>Weight ( kg ):</strong>
                            <div class="text_underline">
                                <span><?php echo $res['i_weight']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-4">
                       <div class="text_stretch">
                            <strong>Date of Birth:</strong>
                            <div class="text_underline">
                                <span><?php echo date("F j, Y", strtotime($res['i_birth_date'])); ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-5">
                       <div class="text_stretch">
                            <strong>Place of Birth:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['i_place_birth']; ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-3">
                       <div class="text_stretch">
                            <strong>Nationality:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['i_nationality']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-12">
                       <div class="text_stretch">
                            <strong>Address:</strong>
                            <div class="text_underline">
                                <span>  
                                <?php if($res['ad_street'] != ''){
                                    echo $res['ad_street'].",";
                                } else {
                                    echo "N/A ,";
                                }
                                ?>
                                </span>
                                <span>  
                                <?php if($res['ad_barangay'] != ''){
                                    echo $res['ad_barangay'].",";
                                } else {
                                    echo "N/A ,";
                                }
                                ?>
                                </span>
                                <span>  
                                <?php if($res['ad_municipality'] != ''){
                                    echo $res['ad_municipality']." (".$res['ad_zipcode']."),";
                                } else {
                                    echo "N/A ,";
                                }
                                ?>
                                </span>
                                <span>  
                                <?php if($res['ad_province'] != ''){
                                    echo $res['ad_province'];
                                } else {
                                    echo "N/A ,";
                                }
                                ?>
                                </span>
                            </div>
                       </div>
                       <div class="text_stretch">
                            <strong class="pr-5 mr-4"></strong>
                            <div class="text_tag">
                                <small><i>Street</i></small>
                                <small><i>Barangay</i></small>
                                <small><i>Municipality ( Zipcode )</i></small>
                                <small><i>Province</i></small>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-6">
                       <div class="text_stretch">
                            <strong>Contact Number:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['ct_mobile_no']; ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-6">
                       <div class="text_stretch">
                            <strong>Email Address:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['ct_email_address']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-6">
                       <div class="text_stretch">
                            <strong>Physical Disability:</strong>
                            <div class="text_underline">
                                <span>
                                <?php if($res['c_physical_disability'] != ''){
                                    echo $res['c_physical_disability'];
                                } else {
                                    echo "N/A";
                                }
                                ?>
                                </span>
                            </div>
                       </div>
                    </div>
                    <div class="col-6">
                       <div class="text_stretch">
                            <strong>Mental Disability:</strong>
                            <div class="text_underline">
                                <span>
                                <?php if($res['c_mental_disability'] != ''){
                                    echo $res['c_mental_disability'];
                                } else {
                                    echo "N/A";
                                }
                                ?>
                                </span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-8">
                       <div class="text_stretch">
                            <strong>Criminal Liability:</strong>
                            <div class="text_underline">
                                <span>
                                <?php if($res['c_criminal_liability'] != ''){
                                    echo $res['c_criminal_liability'];
                                } else {
                                    echo "N/A";
                                }
                                ?>
                                </span>
                            </div>
                       </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 pt-3 doc_body">
                <h5><strong>FAMILY DATA</strong></h5>
                <div class="row pb-3">
                    <div class="col-7">
                       <div class="text_stretch">
                            <strong>Father's Full Name:</strong>
                            <div class="text_underline">
                                <?php if($res['p_father'] != ''){
                                    echo $res['p_father'];
                                } else {
                                    echo "N/A";
                                }
                                ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-5">
                       <div class="text_stretch">
                            <strong>Occupation:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['p_father_occupation']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-7">
                       <div class="text_stretch">
                            <strong>Mother's Full Name:</strong>
                            <div class="text_underline">
                                <?php if($res['p_mother'] != ''){
                                    echo $res['p_mother'];
                                } else {
                                    echo "N/A";
                                }
                                ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-5">
                       <div class="text_stretch">
                            <strong>Occupation:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['p_mother_occupation']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-8">
                       <div class="text_stretch">
                            <strong>Parent's Address:</strong>
                            <div class="text_underline">
                                <?php if($res['p_address'] != ''){
                                    echo $res['p_address'];
                                } else {
                                    echo "N/A";
                                }
                                ?></span>
                            </div>
                       </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 pt-3 doc_body">
                <h5><strong>EDUCATIONAL BACKGROUND</strong></h5>
                <div class="row pb-3">
                    <div class="col-8">
                       <div class="text_stretch">
                            <strong>Elementary:</strong>
                            <div class="text_underline">
                                <?php if($res['eb_elementary'] != ''){
                                    echo $res['eb_elementary'];
                                } else {
                                    echo "N/A";
                                }
                                ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <strong>Date Graduated:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['eb_elem_year']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-8">
                       <div class="text_stretch">
                            <strong>Secondary ( High School ):</strong>
                            <div class="text_underline">
                                <?php if($res['eb_secondary'] != ''){
                                    echo $res['eb_secondary'];
                                } else {
                                    echo "N/A";
                                }
                                ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <strong>Date Graduated:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['eb_sec_year']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-8">
                       <div class="text_stretch">
                            <strong>Tertiary ( College ):</strong>
                            <div class="text_underline">
                                <?php if($res['eb_tertiary'] != ''){
                                    echo $res['eb_tertiary'];
                                } else {
                                    echo "N/A";
                                }
                                ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <strong>Date Graduated:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['eb_ter_year']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-5">
                       <div class="text_stretch">
                            <strong>Course:</strong>
                            <div class="text_underline">
                                <?php
                                    echo $res['eb_course_description'];
                                ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <strong>Course / Year / Section:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['eb_course_code'].$res['eb_year'].$res['eb_section']; ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-3">
                       <div class="text_stretch">
                            <strong>Curriculum:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['eb_curriculum']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-12 pt-3 doc_body">
                <h5><strong>SKILLS</strong></h5>
                <div class="row pb-3">
                    <div class="col-12">
                       <div class="text_stretch">
                            <div class="text_underline">
                                <?php if($res['i_skills'] != ''){
                                    echo $res['i_skills'];
                                } else {
                                    echo "N/A";
                                }
                                ?></span>
                            </div>
                       </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 pt-3 doc_body">
                <h5><strong>TRAININGS AND SEMINARS ATTENDED</strong></h5>
                <div class="row pb-3">
                    <div class="col-12">
                       <div class="text_stretch">
                            <div class="text_underline">
                                <?php if($res['i_training_seminar'] != ''){
                                    echo $res['i_training_seminar'];
                                } else {
                                    echo "N/A";
                                }
                                ?></span>
                            </div>
                       </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 pt-3 doc_body">
                <h5><strong>IN CASE OF EMERGENCY, PLEASE NOTIFY</strong></h5>
                <div class="row pb-3">
                    <div class="col-8">
                       <div class="text_stretch">
                            <strong>Guardian's Full Name:</strong>
                            <div class="text_underline">
                                <?php
                                    echo $res['em_guardian'];
                                ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <strong>Relationship:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['em_relationship']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-7">
                       <div class="text_stretch">
                            <strong>Address:</strong>
                            <div class="text_underline">
                                <?php
                                    echo $res['em_address'];
                                ?></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-5">
                       <div class="text_stretch">
                            <strong>Contact Number:</strong>
                            <div class="text_underline">
                                <span><?php echo $res['em_contact']; ?></span>
                            </div>
                       </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-12 pt-3 doc_body">
                <span class="doc_indent">I HEREBY CERTIFY THAT THE INFORMATION GIVEN ABOVE ARE TRUE AND CORRECT TO THE BEST OF MY KNOWLEDGE.</span>
            </div>

            <div class="col-lg-12 text-center pt-5">
                <span class="doc_signature"><?php 
                echo strtoupper($res['i_first_name']." ");
                if($res['i_middle_name']) {
                   echo strtoupper(substr($res['i_middle_name'], 0, 1)).". ";
                }
                echo strtoupper($res['i_last_name']);
                ?></span><br>
                <div class="pt-1">Signature</div>
            </div>

            <div class="col-lg-12 doc_footer text-center pt-5">
                <img src="../../assets/header/doc-footer.png" alt="">
            </div>
        </div>

    </div>
    <?php 
        include("include/script.php"); 
    ?>
    <script>

    </script>
</body>
</html>
