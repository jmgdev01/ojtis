<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    if (isset($_POST['btn_save'])) {
        $tr_id = $_POST['tr_id'];
        $tr_first_name = $_POST['tr_first_name'];
        $tr_middle_name = $_POST['tr_middle_name'];
        $tr_last_name = $_POST['tr_last_name'];
        $tr_suffix_name = $_POST['tr_suffix_name'];
        $tr_sex = $_POST['tr_sex'];
        $tr_mobile = $_POST['tr_mobile'];
        
        // IMAGE
        $file_name = $_FILES['profile_image']['name'];
        $file_tmp = $_FILES['profile_image']['tmp_name'];
        $pi = $_POST['pi'];
    
        if (empty($tr_first_name) || empty($tr_last_name) || empty($tr_sex) || empty($tr_mobile) || empty($pi) && empty($file_name)) {
            // Alert if text fields are empty
            echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                    All fields are required!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
         } else {

            // Upload image from your computer to the project directory
            move_uploaded_file($file_tmp, "../../assets/profile/trainer/" . $file_name);
            $img_store = "../../assets/profile/trainer/" . $_FILES['profile_image']['name'];

            $image = '';
            if($file_name != '') {
                $image = $img_store;
            } else {
                $image = $pi;
            }

            // Update supervisor details
            $sql1 = mysqli_query($db, "UPDATE trainer_tbl SET tr_first_name='$tr_first_name', tr_middle_name='$tr_middle_name', tr_last_name='$tr_last_name', tr_suffix_name='$tr_suffix_name', tr_img='$image', tr_sex='$tr_sex', tr_mobile='$tr_mobile' WHERE tr_id='$tr_id'");
    
            // Alert if update is successful
            echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
                    Profile updated successfully!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        } 
    }

    $sql0 = mysqli_query($db, "SELECT * FROM accounts_tbl 
    INNER JOIN trainer_tbl ON accounts_tbl.tr_id = trainer_tbl.tr_id 
    WHERE accounts_tbl.acc_id='$acc_id'");
    $res0 = mysqli_fetch_assoc($sql0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile - OJT Information System</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php include("include/nav.php"); ?>
    <div class="container py-5">
            <form method="post" action="profile.php" enctype="multipart/form-data">
                <input type="hidden" name="tr_id" value="<?php echo $res0['tr_id']; ?>">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body pb-3 px-4">
                                <h2 class="pb-2 text-center"><strong>PROFILE</strong></h2>
                                <div class="row">

                                    <div class="col-lg-4 col-md-12">
                                        <div class="row">
                                                <div class="col-md-12 pb-3">
                                                    <label><small><strong>PROFILE IMAGE</strong></small></label>
                                                    <div class="col-lg-12 profile_img_con">
                                                        <img id="image_preview" src="<?php echo $res0['tr_img']; ?>">
                                                    </div>
                                                    <input type="hidden" name="pi" value="<?php echo $res0['tr_img']; ?>">
                                                    <input type="file" name="profile_image" id="profile_image" class="form-control">
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="form-group col-lg-5 col-md-6">
                                                <label><small><strong>FIRST NAME <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="tr_first_name" name="tr_first_name" class="form-control" placeholder="e.g. Juan " value="<?php echo $res0['tr_first_name']; ?>">
                                            </div>
                                            <div class="form-group col-lg-3 col-md-6">
                                                <label><small><strong>MIDDLE NAME </strong></small></label>
                                                <input type="text" id="tr_middle_name" name="tr_middle_name" class="form-control" placeholder="e.g. Dela " value="<?php echo $res0['tr_middle_name']; ?>">
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label><small><strong>LAST NAME <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="tr_last_name" name="tr_last_name" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['tr_last_name']; ?>">
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label><small><strong>SUFFIX NAME </strong></small></label>
                                                <select class="form-control" id="tr_suffix_name" name="tr_suffix_name">
                                                <option value="<?php echo $res0['tr_suffix_name']; ?>">Active (<?php echo $res0['tr_suffix_name']; ?>)</option>
                                                    <option value="">- Select -</option>
                                                    <option value="Jr.">Jr.</option>
                                                    <option value="Sr.">Sr.</option>
                                                    <option value="III">III</option>
                                                    <option value="IV">IV</option>
                                                    <option value="V">V</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label><small><strong>SEX <span class="text-danger">*</span></strong></small></label>
                                                <select class="form-control" id="tr_sex" name="tr_sex">
                                                <option value="<?php echo $res0['tr_sex']; ?>">Active (<?php echo $res0['tr_sex']; ?>)</option>
                                                    <option value="">- Select -</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label><small><strong>MOBILE NUMBER <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="tr_mobile" name="tr_mobile" class="form-control" placeholder="e.g. 0956424564" value="<?php echo $res0['tr_mobile']; ?>">
                                            </div>
                                            <div class="form-group col-lg-12 text-center">
                                                <button class="form-btn form-btn-md btn-blue" type="submit" id="btn_save" name="btn_save"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE</strong></button>
                                            </div>
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
