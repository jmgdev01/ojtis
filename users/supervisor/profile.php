<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    if (isset($_POST['btn_save'])) {
        $s_id = $_POST['s_id'];
        $s_first_name = $_POST['s_first_name'];
        $s_middle_name = $_POST['s_middle_name'];
        $s_last_name = $_POST['s_last_name'];
        $s_suffix_name = $_POST['s_suffix_name'];
        $s_mobile_no = $_POST['s_mobile_no'];
        $s_agency = $_POST['s_agency'];
        $s_designation = $_POST['s_designation'];
    
        $sql = mysqli_query($db, "UPDATE supervisor_tbl SET s_first_name='$s_first_name', s_middle_name='$s_middle_name', s_last_name='$s_last_name', s_suffix_name='$s_suffix_name', s_mobile_no='$s_mobile_no', s_agency='$s_agency', s_designation='$s_designation' WHERE s_id='$s_id'");
    }

    $sql = mysqli_query($db, "SELECT * FROM supervisor_tbl INNER JOIN accounts_tbl ON supervisor_tbl.s_id = accounts_tbl.s_id WHERE accounts_tbl.acc_id='$acc_id'");
    $res = mysqli_fetch_assoc($sql);

    if (isset($_POST['btn_save'])) {
        $s_id = $_POST['s_id'];
        $s_first_name = $_POST['s_first_name'];
        $s_middle_name = $_POST['s_middle_name'];
        $s_last_name = $_POST['s_last_name'];
        $s_suffix_name = $_POST['s_suffix_name'];
        $s_mobile_no = $_POST['s_mobile_no'];
        $s_agency = $_POST['s_agency'];
        $s_designation = $_POST['s_designation'];
    
        // check if any of the fields are empty
        if (empty($s_first_name) || empty($s_middle_name) || empty($s_last_name) || empty($s_suffix_name) || empty($s_mobile_no)|| empty($s_agency)|| empty($s_designation)) {
            echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                All fields are required!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
        } else {
            $sql1 = mysqli_query($db, "UPDATE supervisor_tbl SET s_first_name='$s_first_name', s_middle_name='$s_middle_name', s_last_name='$s_last_name', s_suffix_name='$s_suffix_name', s_mobile_no='$s_mobile_no', s_agency='$s_agency', s_designation='$s_designation' WHERE s_id='$s_id'");
            echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
                Updated successfully!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
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
    <title>Supervisor</title>
    <?php 
        include("include/style.php"); 
    ?>
</head>
<body id="page-top">
    <?php include("include/nav.php"); ?>
    
    <div class="container py-5">
            <form method="post" action="profile.php">
                <input type="hidden" name="s_id" value="<?php echo $res['s_id']; ?>">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 col-md-12">
                        <div class="card">
                            <div class="card-body pb-2 px-4">
                                <h3 class="pb-2 text-center"><strong>PROFILE</strong></h3>
                                    <div class="row">
                                        <form action="profile.php" method="post">
                                            <div class="form-group col-lg-4 col-md-12">
                                                <label><small><strong>FIRST NAME <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_first_name" name="s_first_name" class="form-control" placeholder="e.g. Juan" value="<?php echo $res['s_first_name'];?>">
                                            </div>
                                            <div class="form-group col-lg-2 col-md-12">
                                                <label><small><strong>MIDDLE NAME <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_middle_name" name="s_middle_name" class="form-control" placeholder="e.g. Dela" value="<?php echo $res['s_middle_name'];?>">
                                            </div>
                                            <div class="form-group col-lg-4 col-md-12">
                                                <label><small><strong>LAST NAME <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_last_name" name="s_last_name" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res['s_last_name'];?>">
                                            </div>
                                            <div class="form-group col-lg-2 col-md-12">
                                                <label><small><strong>EXT. </strong></small></label>
                                                <select class="form-control" id="s_suffix_name" name="s_suffix_name">
                                                    <option value="<?php echo $res['s_suffix_name'];?>">Active(<?php echo $res['s_suffix_name'];?>)</option>
                                                    <option value="Jr.">Jr.</option>
                                                    <option value="Sr.">Sr.</option>
                                                    <option value="III">III</option>
                                                    <option value="IV">IV</option>
                                                    <option value="V">V</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-12">
                                                <label><small><strong>CONTACT NO. <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_mobile_no" name="s_mobile_no" class="form-control" placeholder="e.g. 09123456789" value="<?php echo $res['s_mobile_no'];?>">
                                            </div>
                                            <div class="form-group col-lg-5 col-md-12">
                                                <label><small><strong>AGENCY <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_agency" name="s_agency" class="form-control" placeholder="" value="<?php echo $res['s_agency'];?>">
                                            </div>
                                            <div class="form-group col-lg-4 col-md-12">
                                                <label><small><strong>DESIGNATION <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_designation" name="s_designation" class="form-control" placeholder="" value="<?php echo $res['s_designation'];?>">
                                            </div>
                                            <div class="form-group col-lg-12 text-center">
                                                <button class="form-btn form-btn-md btn-blue" type="submit" id="btn_save" name="btn_save"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</strong></button>
                                            </div>
                                        </form>
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
