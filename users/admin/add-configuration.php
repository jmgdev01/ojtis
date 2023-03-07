<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Configuration - OJT Information System</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php 
    include("include/nav.php");
    include("configuration-section/insert-configuration.php");
    ?>
    
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">

                    <div class="row pb-3">
                        <div class="col-lg-12">
                            <button class="form-btn form-btn-sm btn-dark" onclick="window.location.href='view-configuration.php'"><i class="fa fa-arrow-left"></i> Back</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body pb-2 px-4">
                        <form method="POST" action="add-configuration.php">
                            <h2 class="text-center"><strong>CONFIGURATION DETAILS</strong></h2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="pb-1 pt-2"><strong>SUBJECT DETAILS</strong></h5>
                                    <div class="row">
                                        <div class="form-group col-lg-5 col-md-5 col-sm-12">
                                            <label><small><strong>CODE <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="cf_subject_code" name="cf_subject_code" class="form-control" placeholder="e.g. Practicum 001">
                                        </div>
                                        <div class="form-group col-lg-7 col-md-7 col-sm-12">
                                            <label><small><strong>NAME <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="cf_subject" name="cf_subject" class="form-control" placeholder="e.g. Practicum / Internship">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-12">
                                            <label><small><strong>HOURS <span class="text-danger">*</span></strong></small></label>
                                            <input type="number" id="cf_hours" name="cf_hours" class="form-control" placeholder="e.g. 500">
                                        </div> 
                                        <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                            <label><small><strong>HOURS IN WORDS <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="cf_hours_inwords" name="cf_hours_inwords" class="form-control" placeholder="e.g. Five Hundred">
                                        </div>
                                        <div class="form-group col-lg-5 col-md-5 col-sm-12">
                                            <label><small><strong>EQUIVALENT IN WEEKS <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="cf_week_equivalent" name="cf_week_equivalent" class="form-control" placeholder="e.g. 3 months and 3 weeks">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label><small><strong>STARTING DATE <span class="text-danger">*</span></strong></small></label>
                                            <input type="date" id="cf_speriod" name="cf_speriod" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label><small><strong>EXPIRATION DATE <span class="text-danger">*</span></strong></small></label>
                                            <input type="date" id="cf_eperiod" name="cf_eperiod" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h5 class="pb-1 pt-3"><strong>SCHOOL DETAILS</strong></h5>
                                    <div class="row">
                                        <div class="form-group col-lg-7 col-md-12 col-sm-12">
                                            <label><small><strong>PROGRAM/COURSE <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="cf_program" name="cf_program" class="form-control" placeholder="e.g. Bachelor of Science in Information Technology">
                                        </div> 
                                        <div class="form-group col-lg-5 col-md-6 col-sm-12">
                                            <label><small><strong>DEPARTMENT<span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="cf_department" name="cf_department" class="form-control" placeholder="e.g. College of Science and Technology">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label><small><strong>SCHOOL<span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="cf_school" name="cf_school" class="form-control" placeholder="e.g. Guimaras State University">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label><small><strong>CAMPUS<span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="cf_campus" name="cf_campus" class="form-control" placeholder="e.g. Mosqueda Campus">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label><small><strong>ADDRESS<span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="cf_address" name="cf_address" class="form-control" placeholder="e.g. McLain, Buenavista, Guimaras">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 text-center">
                                    <button class="form-btn form-btn-md btn-blue" type="submit" id="btn_save" name="btn_save"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE</strong></button>
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
    });
    </script>
</body>
</html>