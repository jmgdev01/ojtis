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
    <title>Profile</title>
    <?php 
        include("include/style.php"); 
    ?>
</head>
<body id="page-top">
    <?php 
    include("profile-section/update-profile.php");
    include("profile-section/display-account.php");
    include("include/nav.php"); ?>
    
    <div class="container py-5">
            <form method="POST" action="profile.php" enctype="multipart/form-data">
                <input type="hidden" name="a_id" value="<?php echo $res0['a_id']; ?>">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body pb-3 px-4">
                                <h2 class="pb-2 text-center"><strong>PROFILE</strong></h2>
                                <div class="row">

                                    <div class="col-lg-5 col-md-12">
                                        <div class="row">
                                                <div class="col-md-12 pb-3">
                                                    <label><small><strong>PROFILE IMAGE</strong></small></label>
                                                    <div class="col-lg-12 profile_img_con">
                                                        <img id="image_preview" src="<?php echo $res0['a_img']; ?>">
                                                    </div>
                                                    <input type="hidden" name="pi" value="<?php echo $res0['a_img']; ?>">
                                                    <input type="file" name="profile_image" id="profile_image" class="form-control">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-12">
                                        <div class="row">
                                            <div class="form-group col-lg-12 col-md-7">
                                                <label><small><strong>FULL NAME <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="a_fullname" name="a_fullname" class="form-control" placeholder="e.g. Juan Dela Cruz" value="<?php echo $res0['a_fullname']; ?>">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-5">
                                                <label><small><strong>CONTACT NO <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_mobile_no" name="a_mobile" class="form-control" placeholder="e.g. 09123456789" value="<?php echo $res0['a_mobile']; ?>">
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

        $("#msg_alert").delay(3000).fadeOut();

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
