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
    <title>Curriculum Vitae - OJT Information System</title>
    <?php include("include/style.php"); ?>
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
                <h3><strong>CURRICULUM VITAE</strong></h3>
            </div>

            <br><br><br>

            <div class="col-lg-12 pt-3 pb-2 doc_body">
                <div class="row">
                    <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                    <h6>
                        <strong><?php 
                        echo strtoupper($res['i_first_name'])." ";
                        if($res['i_middle_name'] != ''){
                            echo strtoupper(substr($res['i_middle_name'], 0, 1)).". ";
                        }
                        echo strtoupper($res['i_last_name']); 
                        if($res['i_suffix_name'] != ''){
                            echo " ".$res['i_suffix_name'];
                        }
                        ?></strong>
                    </h6>
                    <h6>  
                    <?php if($res['ad_street'] != ''){
                        echo $res['ad_street'].", ";
                    } else {}
                    if($res['ad_barangay'] != ''){
                        echo $res['ad_barangay'].", ";
                    } else {}
                    if($res['ad_municipality'] != ''){
                        echo $res['ad_municipality']." (".$res['ad_zipcode']."), ";
                    } else {}
                    if($res['ad_province'] != ''){
                        echo $res['ad_province'];
                    } else {}
                    ?>
                    </h6>
                    <h6>
                        <?php echo $res['ct_email_address']; ?>
                    </h6>
                    <h6>
                        <?php echo $res['ct_mobile_no']; ?>
                    </h6>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div id="cv_img_con" style="background-image: url('<?php echo $res['i_img']; ?>')">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 pt-3 doc_sub_header">
                <h5><strong>PERSONAL INFORMATION</strong></h5>
            </div>

            <div class="col-lg-12 pt-3 pb-2 doc_body">
                <div class="row">
                    <div class="col-5">
                        <div class="d-flex justify-content-between">
                            <span><strong>Age</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Sex</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Civil Status</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Height</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Weight</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Religion</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Date of Birth</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Place of Birth</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Father's Name</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Mother's Name</strong></span><span>:</span>
                        </div>
                    </div>
                    <div class="col-7">
                        <div>
                            <span>
                            <?php 
                            if($res['i_age'] > 1){
                                echo  $res['i_age']." years old";
                            } else {
                                echo  $res['i_age']." year old";
                            }
                            ?>
                            </span>
                        </div>
                        <div>
                            <?php echo $res['i_sex']; ?>
                        </div>
                        <div>
                            <?php echo $res['i_civil_status']; ?>
                        </div>
                        <div>
                            <?php echo $res['i_height']." cm"; ?>
                        </div>
                        <div>
                            <?php echo $res['i_weight']." kgs"; ?>
                        </div>
                        <div>
                            <?php echo $res['i_religion']; ?>
                        </div>
                        <div>
                            <?php echo date("F j, Y", strtotime($res['i_birth_date'])); ?>
                        </div>
                        <div>
                            <?php echo $res['i_place_birth']; ?>
                        </div>
                        <div>
                            <?php echo $res['p_father']; ?>
                        </div>
                        <div>
                            <?php echo $res['p_mother']; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 pt-3 doc_sub_header">
                <h5><strong>EDUCATIONAL BACKGROUND</strong></h5>
            </div>

            <div class="col-lg-12 pt-3 pb-2 doc_body">
                <div class="row">
                    <div class="col-5">
                        <div class="d-flex justify-content-between">
                            <span><strong>Elementary</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Secondary / High School</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Senior High School</strong></span><span>:</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span><strong>Tertiary / College</strong></span><span>:</span>
                        </div>
                    </div>
                    <div class="col-7">
                        <div>
                            <?php echo $res['eb_elementary']." (".$res['eb_elem_year'].")"; ?>
                        </div>
                        <div>
                            <?php echo $res['eb_secondary']." (".$res['eb_sec_year'].")"; ?>
                        </div>
                        <div>
                            <?php echo $res['eb_shs']." (".$res['eb_shs_year'].")"; ?>
                        </div>
                        <div>
                            <?php echo $res['eb_tertiary']." (".$res['eb_ter_year'].")"; ?>
                            <br>
                            <small><?php echo $res['eb_course_description']; ?></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 pt-3 doc_sub_header">
                <h5><strong>TRAININGS AND SEMINARS</strong></h5>
            </div>

            <div class="col-lg-12 pt-3 pb-2 doc_body">
                <div class="row">
                    <div class="col-12">
                        <?php 
                        $trainings_seminars = explode(";", $res['i_training_seminar']);

                        foreach ($trainings_seminars as $ts) {
                            if($ts != ''){
                                echo "• ".$ts."<br>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>


            <!-- <div class="col-lg-12 doc_footer text-center pt-5">
                <img src="../../assets/header/doc-footer.png" alt="">
            </div> -->
        </div>

    </div>
    <?php include("include/script.php"); ?>
    <script>

    </script>
</body>
</html>
