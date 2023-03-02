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
    <title>Profile - OJT Information System</title>
    <?php
    include("configuration-section/update-configuration.php");
    include("configuration-section/display-configuration.php");
    include("include/style.php");
     ?>
</head>
<body id="page-top">
    <?php include("include/nav.php"); ?>
    <div class="container py-5">
        <form method="post" action="edit_configuration.php?manage_configuration_id=<?php echo $res0['cf_id']; ?>">
            <input type="hidden" name="cf_id" value="<?php echo $res0['cf_id']; ?>">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body pb-3 px-4">
                        <h2 class="pb-2 text-center"><strong>Configuration</strong></h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>SUBJECT CODE <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="s_first_name" name="cf_subject_code" class="form-control" placeholder="e.g. Juan " value="<?php echo $res0['cf_subject_code']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>SUBJECT </strong></small></label>
                                        <input type="text" id="cf_subject" name="cf_subject" class="form-control" placeholder="e.g. Dela " value="<?php echo $res0['cf_subject']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>HOURS <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="cf_hours" name="cf_hours" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_hours']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>HOURS IN WORDS <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="cf_hours_inwords" name="cf_hours_inwords" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_hours_inwords']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>WEEK EQUIVALENT <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="cf_week_equivalent" name="cf_week_equivalent" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_week_equivalent']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>START DATE <span class="text-danger">*</span></strong></small></label>
                                        <input type="date" id="cf_start_date" name="cf_start_date" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_start_date']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>ADDRESS <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="cf_address" name="cf_address" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_address']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>SCHOOL <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="cf_school" name="cf_school" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_school']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>CAMPUS <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="cf_campus" name="cf_campus" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_campus']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>DEPARTMENT <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="cf_department" name="cf_department" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_department']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>START PERIOD <span class="text-danger">*</span></strong></small></label>
                                        <input type="date" id="cf_speriod" name="cf_speriod" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_speriod']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>END PERIOD <span class="text-danger">*</span></strong></small></label>
                                        <input type="date" id="cf_eperiod" name="cf_eperiod" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_eperiod']; ?>">
                                    </div>
                                    <div class="form-group col-lg-12 col-md-6">
                                        <label><small><strong>PROGRAM<span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="cf_program" name="cf_program" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['cf_program']; ?>">
                                    </div>
                                    <div class="form-group col-lg-12 text-center">
                                        <button class="form-btn form-btn-md btn-blue" type="submit" id="update" name="update"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE</strong></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>    
            </div>

        </form>  
    </div>
    
    <?php include("include/script.php"); ?>
    <script>
    $(document).ready(function() {
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
    });
    </script>
</body>
</html>
