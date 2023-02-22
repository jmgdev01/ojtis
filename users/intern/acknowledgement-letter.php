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
    INNER JOIN signatories_tbl ON configuration_tbl.cf_id = signatories_tbl.cf_id 
    WHERE accounts_tbl.acc_id='$acc_id'");
    $res = mysqli_fetch_assoc($sql);

    function ordinal($number) {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13)) {
            return $number. 'th';
        } else {
            return $number. $ends[$number % 10];
        }
    }
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
                <h4><strong>ACKNOWLEDGEMENT</strong></h4>
            </div>

            <div class="col-lg-12 pt-3 doc_body">
                <br>

                <div class="text-left">
                    <span>Republic of the Philippines</span>
                    <br>
                    <span>Province of Guimaras</span>
                </div>

                <br><br>

                <span class="doc_indent">
                    I certify that on this 
                    <?php echo ordinal(date("j")); ?> 
                    day of 
                    <?php echo date("F"); ?>, 
                    2023, before me, a notary public duty authorized in the province/city named above to take acknowledgements, personally appeared the following:
                </span>

                <br><br>

                <table width="100%" class="info_tbl">
                    <tr width="100%">
                        <td width="45%" style="padding-bottom: 40px;">
                            <span>Name</span>
                        </td>
                        <td width="25%" style="padding-bottom: 40px;">
                            <span>Valid ID</span>
                        </td>
                        <td width="30%" style="padding-bottom: 40px;">
                            <span>Date / Place of Issue</span>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="45%" style="padding-bottom: 20px;">
                            <span>
                                <strong style="text-transform: uppercase;">
                                    <?php echo strtoupper($res['sg_name4']); ?>
                                </strong>
                            </span>
                        </td>
                        <td width="25%" style="padding-bottom: 20px;">
                            <span> </span>
                        </td>
                        <td width="30%" style="padding-bottom: 20px;">
                            <span> </span>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="45%" style="padding-bottom: 20px;">
                            <span>
                                <strong style="text-transform: uppercase;">
                                    <?php echo strtoupper($res['sg_name4']); ?>
                                </strong>
                            </span>
                        </td>
                        <td width="25%" style="padding-bottom: 20px;">
                            <span> </span>
                        </td>
                        <td width="30%" style="padding-bottom: 20px;">
                            <span> </span>
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
