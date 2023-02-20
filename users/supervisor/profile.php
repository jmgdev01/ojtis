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
        <h3 class="pb-2"><strong>Supervisor</strong></h3>

        <div class="accordion" id="c_body">
            <div class="card">
                <div class="card-header c_header" data-toggle="collapse" data-target="#c1">
                    <div>1</div><h5><strong>VIEW INTERNS ATTENDANCE</strong></h5>
                </div>
            </div>

            <div class="card">
                <div class="card-header c_header" data-toggle="collapse" data-target="#c2">
                    <div>2</div><h5><strong>ENCODE REMARKS ON INTERNS DTR</strong></h5>
                </div>
            </div>

            <div class="card">
                <div class="card-header c_header" data-toggle="collapse" data-target="#c2-1">
                    <div>3</div><h5><strong>UPDATE PROFILE ACCOUNT SETTING</strong></h5>
                </div>

                <div id="c2-1" class="collapse"  data-parent="#c_body">
                    <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-7 col-md-7">
                            <label><small><strong>FULLNAME <span class="text-danger">*</span></strong></small></label>
                            <input type="email" id="ct_email_address" class="form-control" placeholder="e.g. John Doe Smith">
                        </div>
                        <div class="form-group col-lg-5 col-md-5">
                            <label><small><strong>AGENCY/COMPANY NAME<span class="text-danger">*</span></strong></small></label>
                            <input type="email" id="ct_email_address" class="form-control" placeholder="e.g. Family Design Co.">
                        </div>
                        <div class="form-group col-lg-7 col-md-7">
                            <label><small><strong>CONTACT NUMBER <span class="text-danger">*</span></strong></small></label>
                            <input type="text" id="ct_mobile_no" class="form-control" placeholder="e.g. 09123456789">   
                        </div>
                        <div class="form-group col-lg-5 col-md-5">
                            <label><small><strong>DESIGNATION<span class="text-danger">*</span></strong></small></label>
                            <input type="email" id="ct_email_address" class="form-control" placeholder="e.g.">
                        </div>
                        <div class="form-group col-lg-7 col-md-7">
                            <label><small><strong>ADDRESS<span class="text-danger">*</span></strong></small></label>
                            <input type="text" id="ct_mobile_no" class="form-control" placeholder="e.g. Mclain Buenavista, Guimaras">   
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
