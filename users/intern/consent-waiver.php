<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    $sql = mysqli_query($db, "SELECT * FROM accounts_tbl 
    INNER JOIN intern_tbl ON accounts_tbl.i_id = intern_tbl.i_id 
    INNER JOIN contacts_tbl ON intern_tbl.i_id = contacts_tbl.i_id 
    INNER JOIN emergency_tbl ON intern_tbl.i_id = emergency_tbl.i_id 
    INNER JOIN address_tbl ON intern_tbl.i_id = address_tbl.i_id 
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
                <h4><strong>PARENT / GUARDIAN / SPOUSE CONSENT AND WAIVER</strong></h4>
            </div>

            <div class="col-lg-12 pt-3 doc_body">
                <br>

                <div class="text-right">
                    <span><?php echo date("F j, Y"); ?></span>
                </div>

                <br><br>

                <span><strong>TO WHOM IT MAY CONCERN:</strong></span>

                <br><br>

                <span class="doc_indent">
                    This is to certify that I am allowing my 
                    <?php
                    if($res['i_sex'] == 'Male') {
                        echo "son, ";
                    } else {
                        echo "daughter, ";
                    }
                    ?>
                    <strong><?php 
                    echo strtoupper($res['i_first_name'])." ";
                    if($res['i_middle_name'] != ''){
                        echo strtoupper(substr($res['i_middle_name'], 0, 1)).". ";
                    }
                    echo strtoupper($res['i_last_name']); 
                    ?></strong>
                    to take 
                    <?php
                    if($res['i_sex'] == 'Male') {
                        echo "his ";
                    } else {
                        echo "her ";
                    }
                    ?>
                    practicum (On-the-Job Training) for a total of 
                    <strong>
                    <?php echo $res['cf_hours_inwords']; ?>
                    (<?php echo $res['cf_hours']; ?>) hours 
                    </strong>
                    on
                    <?php echo date("F j, Y", strtotime($res['cf_start_date'])); ?>
                    at <strong><?php echo $res['s_agency']; ?> - <?php echo $res['s_office']; ?></strong> 
                    in partial fulfillment of the requirements for the degree of 
                    <strong><?php echo $res['cf_program']; ?></strong>.
                </span>

                <br><br>

                <span class="doc_indent">
                    It is understood that 
                    <?php
                    if($res['i_sex'] == 'Male') {
                        echo "he ";
                    } else {
                        echo "she ";
                    }
                    ?>
                    abides by the rules and reqgulation that may be imposed by the Supervisor/Staff-in-Charge for 
                    <?php
                    if($res['i_sex'] == 'Male') {
                        echo "his ";
                    } else {
                        echo "her ";
                    }
                    ?>
                    welfare and safety.
                </span>

                <br><br>

                <span class="doc_indent">
                    I fully agree to waive any responsibility on the part of the <?php echo $res['cf_department']; ?> - <?php echo $res['cf_program']; ?> of <?php echo $res['cf_school']; ?> and/or the representattive/s, in case of untoward incident that may happen to my son/daughter during the duration of the practicum.
                </span>

                <br><br><br><br><br>
                
                <div class="row pb-3">
                    <div class="col-4">
                       <div class="text_stretch">
                            <div class="text_underline">
                                <strong><span><?php echo $res['em_guardian']; ?></span></strong>
                            </div>
                       </div>
                       <div class="text_stretch">
                            <div class="text_tag">
                                <small><i>Name of Parent/Guardian </i></small>
                            </div>
                       </div>
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <div class="text_underline">
                                <span style="color: transparent;">.</span>
                            </div>
                       </div>
                       <div class="text_stretch">
                            <div class="text_tag">
                                <small><i>Signature </i></small>
                            </div>
                       </div>
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <div class="text_underline">
                                <strong><span><?php echo date("F j, Y"); ?></span></strong>
                            </div>
                       </div>
                       <div class="text_stretch">
                            <div class="text_tag">
                                <small><i>Date </i></small>
                            </div>
                       </div>
                    </div>
                </div>

                <br><br><br>

                <table width="100%">
                    <tr width="100%">
                        <td width="40%" style="padding-bottom: 15px;">
                            Student's Name:
                        </td>
                        <td width="60%" style="padding-bottom: 15px;">
                        <strong>
                        <?php 
                        echo $res['i_first_name']." ";
                        if($res['i_middle_name'] != ''){
                            echo substr($res['i_middle_name'], 0, 1).". ";
                        }
                        echo $res['i_last_name']; 
                        ?>
                        </strong>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="40%" style="padding-bottom: 15px;">
                            Home Address:
                        </td>
                        <td width="60%" style="padding-bottom: 15px;">
                        <strong>
                        <?php 
                        if($res['ad_street'] != ''){
                            echo $res['ad_street'].", ";
                        }
                        if($res['ad_barangay'] != ''){
                            echo $res['ad_barangay'].", ";
                        }
                        if($res['ad_municipality'] != ''){
                            echo $res['ad_municipality']." (".$res['ad_zipcode']."), ";
                        }
                        if($res['ad_province'] != ''){
                            echo $res['ad_province'];
                        }
                        ?>
                        </strong>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="40%" style="padding-bottom: 15px;">
                            Student's Contact Number:
                        </td>
                        <td width="60%" style="padding-bottom: 15px;">
                        <strong><?php echo $res['ct_mobile_no']; ?></strong>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="40%" style="padding-bottom: 15px;">
                            Parent/Guardian's Contact Number/s:
                        </td>
                        <td width="60%" style="padding-bottom: 15px;">
                        <strong><?php echo $res['em_contact']; ?></strong>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- <div class="col-lg-12 doc_footer text-center pt-5">
                <img src="../../assets/header/doc-footer.png" alt="">
            </div> -->
        </div>

    </div>
    <?php 
        include("include/script.php"); 
    ?>
    <script>

    </script>
</body>
</html>
