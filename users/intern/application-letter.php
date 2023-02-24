<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    $sql = mysqli_query($db, "SELECT * FROM accounts_tbl 
    INNER JOIN intern_tbl ON accounts_tbl.i_id = intern_tbl.i_id 
    INNER JOIN educational_background_tbl ON intern_tbl.i_id = educational_background_tbl.i_id 
    INNER JOIN supervisor_tbl ON accounts_tbl.s_id = supervisor_tbl.s_id 
    INNER JOIN configuration_tbl ON accounts_tbl.cf_id = configuration_tbl.cf_id 
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
    <title>Application Letter - OJT Information System</title>
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

            <div class="col-lg-12 pt-3 doc_body">
                <br>
                <span><?php echo date("F j, Y"); ?></span>
                <br><br><br>
                <span><strong>
                <?php 
                echo strtoupper($res['s_first_name'])." ";
                if($res['s_middle_name'] != ''){
                    echo strtoupper(substr($res['s_middle_name'], 0, 1)).". ";
                }
                echo strtoupper($res['s_last_name']); 
                if($res['s_suffix_name'] != ''){
                    echo " ".$res['s_suffix_name'];
                }
                if($res['s_extension'] != ''){
                    echo ", ".$res['s_extension'];
                }
                ?>
                </strong></span>
                <br>
                <span><?php echo $res['s_designation']; ?></span>
                <br>
                <span><?php echo $res['s_agency']." - ".$res['s_office']; ?></span>
                <br><br>
                <span>Dear <?php echo $res['s_salutation'];?>,</span>
                <br><br>
                <span>Warmest Greetings!</span>
                <br><br><br>   
                <span>I am 
                <strong><?php 
                echo strtoupper($res['i_first_name'])." ";
                if($res['i_middle_name'] != ''){
                    echo strtoupper(substr($res['i_middle_name'], 0, 1)).". ";
                }
                echo strtoupper($res['i_last_name']); 
                if($res['i_suffix_name'] != ''){
                    echo " ".$res['i_suffix_name'];
                }
                ?></strong>, 
                a 
                <?php
                if($res['eb_year'] == 1){
                    echo "first-year";
                } elseif($res['eb_year'] == 2){
                    echo "second-year";
                } elseif($res['eb_year'] == 3){
                    echo "third-year";
                } elseif($res['eb_year'] == 4){
                    echo "fourth-year";
                }
                ?>
                student at the 
                <strong><?php echo $res['cf_campus']; ?></strong>
                of the
                <strong><?php echo $res['cf_school']; ?></strong>
                in 
                <strong><?php echo $res['cf_address']; ?></strong>.
                I must do an On-the-Job Training (OJT) for a minimum of 
                <strong><?php echo $res['cf_hours']; ?> hours</strong>, 
                or equivalent to <strong><?php echo $res['cf_week_equivalent']; ?></strong>,
                starting on <strong><?php echo date("F j, Y", strtotime($res['cf_start_date'])); ?></strong>,
                in order to partially fulfill the requirements for the 
                <strong><?php echo $res['cf_program']; ?></strong>.
                <br><br>
                I would like to apply in your esteemed office as a trainee because I believe the experience and training I will gain could broaden my understanding on the subject matter of my course, and will allow me to grasp the practices and procedures used in an actual working environment.
                <br><br>
                The letter of endorsement from our OJT instructor is enclosed, along with other documentation relevant to the aforementioned OJT program.
                <br><br>
                Thank you for the opportunity.
                <br><br><br>
                Respectfully yours,
                </span>
            </div>

            <div class="col-lg-12 pt-5">
                <span class="doc_signature"><?php 
                echo strtoupper($res['i_first_name']." ");
                if($res['i_middle_name']) {
                   echo strtoupper(substr($res['i_middle_name'], 0, 1)).". ";
                }
                echo strtoupper($res['i_last_name']);
                ?></span><br>
                <div class="doc_signature_designation">Applicant, OJT Trainee</div>
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
