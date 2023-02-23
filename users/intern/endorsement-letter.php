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
    INNER JOIN signatories_tbl ON configuration_tbl.cf_id = signatories_tbl.cf_id 
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
    <title>Endorsement Letter - OJT Information System</title>
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

                <div class="text-right">
                    <span><?php echo date("F j, Y"); ?></span>
                </div>

                <br>
                
                <span><strong><?php 
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
                ?></strong></span>
                <br>
                <span><?php echo $res['s_designation']; ?></span>
                <br>
                <span><?php echo $res['s_office'].", ".$res['s_agency']; ?></span>
                <br><br><br>
                <span>
                <?php
                if($res['s_sex'] == 'Male') {
                    echo "Sir: ";
                } else {
                    echo "Madam: ";
                }
                ?>
                </span>
                <br><br>
                <span class="doc_indent">Greetings!</span>
                <br><br> 

                <span class="doc_indent">
                    We are pleased to introduce 
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
                    student of the 
                    <?php echo $res['cf_program']; ?>
                    of the 
                    <?php echo $res['cf_school']; ?>
                    and is presently enrolled in 
                    <strong><?php echo $res['cf_subject']; ?> (<?php echo $res['cf_subject_code']; ?>)</strong>.
                </span>

                <br>

                <span class="doc_indent">
                    As a partial requirement of this course, 
                    <?php
                    if($res['i_sex'] == 'Male') {
                        echo "he ";
                    } else {
                        echo "she ";
                    }
                    ?>
                    is required to undergo On-the-Job Training equivalent to 
                    <strong>
                    <?php echo $res['cf_hours_inwords']; ?>
                    (<?php echo $res['cf_hours']; ?>)
                    </strong>
                    hours where 
                    <?php
                    if($res['i_sex'] == 'Male') {
                        echo "he ";
                    } else {
                        echo "she ";
                    }
                    ?>
                    learns the actual practices and procedures in I.T. management and other computing skills.
                </span>

                <br><br>

                <span class="doc_indent">
                    Subject to the following conditions:
                </span>
                <div class="pl-5 ml-3">
                    <span>• The training does not involve compensation to the student trainee.</span>
                    <br>
                    <span>• It is not a contract for employment or an obligation to hire the student trainee after of the completion of the training program.</span>
                    <br>
                    <span>• The agency is not liable for any untoward incident that might happen to the student trainee beyond his control during the training period.</span>
                    <br>
                    <span>• The training permit of the student may be withdrawn or terminated upon due cause at the discretion of the parties concerned.</span>
                </div>

                <br>

                <span class="doc_indent">
                    Feel free to reach us at the above address for whatever difficulty or problem you may encounter with our student trainee.
                </span>

                <br><br>
                
                <span class="doc_indent">Thank you and more power.</span>

                <br><br><br><br><br>

                <table width="100%" class="info_tbl">
                    <tr width="100%">
                        <td width="50%" style="padding-bottom: 60px;">
                        </td>
                        <td width="50%" style="padding-bottom: 60px;">
                            <span>Very truly yours, </span>
                            <br><br><br>
                            <span class="doc_signature"><?php echo $res['sg_name1']; ?></span>
                            <br>
                            <span><?php echo $res['sg_designation1']; ?></span>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="50%" style="padding-bottom: 15px;">
                            <span>Noted: </span>
                            <br><br><br>
                            <span class="doc_signature"><?php echo $res['sg_name2']; ?></span>
                            <br>
                            <span><?php echo $res['sg_designation2']; ?></span>
                        </td>
                        <td width="50%" style="padding-bottom: 15px;">
                            <span>Approved: </span>
                            <br><br><br>
                            <span class="doc_signature"><?php echo $res['sg_name3']; ?></span>
                            <br>
                            <span><?php echo $res['sg_designation3']; ?></span>
                        </td>
                    </tr>
                </table>
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
