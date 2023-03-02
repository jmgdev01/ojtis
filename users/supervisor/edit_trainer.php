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
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php
    include("edit-trainer-section/update-trainer.php");
    include("edit-trainer-section/display-trainer.php");
    include("include/nav.php"); ?>
    <div class="container py-5">
            <form method="post" action="edit_trainer.php?manage_trainer_id=<?php echo $res0['tr_id']; ?>" enctype="multipart/form-data">
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
                                                <button class="form-btn form-btn-md btn-blue" type="submit" id="update" name="update"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE</strong></button>
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
