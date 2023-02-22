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
                            <div class="card-body pb-4 px-4">
                                <h3 class="pb-2 text-center"><strong>PROFILE</strong></h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="row">
                                            <form action="profile.php" method="post">
                                                <div class="col-md-12 col-md-12 pb-3">
                                                    <label><small><strong>Profile Image</strong></small></label>
                                                    <div class="col-lg-12 col-md-12 col-sm-12" style="width: 100%; height: 200px; background-color: #ccc; margin-bottom: 10px; text-align: center; padding: 20px;">
                                                        <img id="image_preview" src="#" alt="your image" style="display: none; max-width: 100%; max-height: 100%;">
                                                    </div>
                                                    <input type="file" name="profile_image" id="profile_image">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="form-group col-lg-12 col-md-12">
                                                <label><small><strong>FULL NAME <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_first_name" name="s_first_name" class="form-control" placeholder="e.g. Juan Dela Cru" value="">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12">
                                                <label><small><strong>CONTACT NO<span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_mobile_no" name="s_mobile_no" class="form-control" placeholder="e.g. 09123456789" value="">
                                            </div>
                                            <div class="form-group col-lg-12 text-center">
                                                <button class="form-btn form-btn-md btn-blue" type="submit" id="btn_save" name="btn_save"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</strong></button>
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

    <?php 
        include("include/script.php"); 
    ?>
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
