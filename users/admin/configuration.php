<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    if (isset($_POST['btn_save'])) {
        $cf_id = $_POST['cf_id'];
        $cf_period = $_POST['cf_period'];
        $cf_hours = $_POST['cf_hours'];
        $cf_hours_inwords = $_POST['cf_hours_inwords'];
        $cf_week_equivalent = $_POST['cf_week_equivalent'];
        $cf_start_date = $_POST['cf_start_date'];
        $cf_address = $_POST['cf_address'];
        $cf_campus = $_POST['cf_campus'];
        $cf_school = $_POST['cf_school'];
        $cf_department = $_POST['cf_department'];
        $cf_program = $_POST['cf_program'];
        $cf_subject = $_POST['cf_subject'];
        $cf_subject_code = $_POST['cf_subject_code'];
    
        if (empty($cf_period) || empty($cf_hours) || empty($cf_hours_inwords) || empty($cf_week_equivalent)|| empty($cf_start_date)|| empty($cf_address)|| empty($cf_campus)|| empty($cf_school)|| empty($cf_department)|| empty($cf_program)|| empty($cf_subject)|| empty($cf_subject_code)) {
            echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                All fields are required!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
         } else {
            // supervisor_tbl query
            $sql = mysqli_query($db, "UPDATE configuration_tbl SET cf_period='$cf_period', cf_hours='$cf_hours', cf_hours_inwords='$cf_hours_inwords', cf_week_equivalent='$cf_week_equivalent', cf_start_date='$cf_start_date', cf_start_date='$cf_start_date', cf_address='$cf_address', cf_campus='$cf_campus', cf_school='$cf_school', cf_department='$cf_department', cf_program='$cf_program', cf_subject='$cf_subject', cf_subject_code='$cf_subject_code' WHERE cf_id='$cf_id'");
    
            // Success message
            echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
                    Profile updated successfully!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
                
         } 
    }

    $sql0 = mysqli_query($db, "SELECT * FROM configuration_tbl");
    $res0 = mysqli_fetch_assoc($sql0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Configuration</title>
    <?php 
        include("include/style.php"); 
    ?>
</head>
<body id="page-top">
    <?php include("include/nav.php"); ?>
    
    <div class="container py-5">
            <form method="POST" action="configuration.php">
                <input type="hidden" name="cf_id" value="<?php echo $res0['cf_id']; ?>">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 col-md-12">
                        <div class="card">
                            <div class="card-body pb-2 px-4">
                                <h3 class="pb-2 text-center"><strong>CONFIGURATION</strong></h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="form-group col-lg-5 col-md-5 col-sm-12">
                                                <label><small><strong>SUBJECT CODE <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_subject_code" name="cf_subject_code" class="form-control" placeholder="" value="<?php echo $res0['cf_subject_code']; ?>">
                                            </div>
                                            <div class="form-group col-lg-7 col-md-7 col-sm-12">
                                                <label><small><strong>SUBJECT NAME <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_subject" name="cf_subject" class="form-control" placeholder="" value="<?php echo $res0['cf_subject']; ?>">
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label><small><strong>HOURS <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_hours" name="cf_hours" class="form-control" placeholder="" value="<?php echo $res0['cf_hours']; ?>">
                                            </div> 
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label><small><strong>HOURS IN WORDS <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_hours_inwords" name="cf_hours_inwords" class="form-control" placeholder="" value="<?php echo $res0['cf_hours_inwords']; ?>">
                                            </div>
                                            <div class="form-group col-lg-7 col-md-7 col-sm-12">
                                                <label><small><strong>EQUIVALENT IN WEEKS <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_week_equivalent" name="cf_week_equivalent" class="form-control" placeholder="" value="<?php echo $res0['cf_week_equivalent']; ?>">
                                            </div>
                                            <div class="form-group col-lg-5 col-md-5 col-sm-12">
                                                <label><small><strong>STARTING DATE <span class="text-danger">*</span></strong></small></label>
                                                <input type="date" id="cf_start_date" name="cf_start_date" class="form-control" placeholder="" value="<?php echo $res0['cf_start_date']; ?>">
                                            </div>
                                            <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                                <label><small><strong>PERIOD <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_period" name="cf_period" class="form-control" placeholder="" value="<?php echo $res0['cf_period']; ?>">
                                            </div>
                                            <div class="form-group col-lg-8 col-md-8 col-sm-12">
                                                <label><small><strong>PROGRAM/COURSE <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_program" name="cf_program" class="form-control" placeholder="" value="<?php echo $res0['cf_program']; ?>">
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <label><small><strong>DEPARTMENT<span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_department" name="cf_department" class="form-control" placeholder="" value="<?php echo $res0['cf_department']; ?>">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <label><small><strong>SCHOOL<span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_school" name="cf_school" class="form-control" placeholder="" value="<?php echo $res0['cf_school']; ?>">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <label><small><strong>CAMPUS<span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_campus" name="cf_campus" class="form-control" placeholder="" value="<?php echo $res0['cf_campus']; ?>">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <label><small><strong>ADDRESS<span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="cf_address" name="cf_address" class="form-control" placeholder="" value="<?php echo $res0['cf_address']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 text-center">
                                        <button class="form-btn form-btn-md btn-blue" type="submit" id="btn_save" name="btn_save"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</strong></button>
                                    </div>
                                </div>  
                            </div>
                        </div>    
                    </div>
                </div>
            </form>  

        </div>

    <?php 
        include("include/script.php"); 
    ?>
<script>
   
</script>
</body>
</html>