<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];
    $user_id = $_GET['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Account Details - OJT Information System</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php 
    include("include/nav.php");
    include("edit-supervisor-section/update-supervisor.php");
    include("edit-supervisor-section/display-supervisor.php");
    ?>

    <div class="container py-5">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="row pb-3">
                    <div class="col-lg-12">
                        <button class="form-btn form-btn-sm btn-dark" onclick="window.location.href='view-supervisor.php'"><i class="fa fa-arrow-left"></i> Back</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body pb-3 px-4">
                        <h2 class="pb-2 text-left"><strong>ACCOUNT DETAILS</strong></h2>

                        <form method="post" action="edit-supervisor.php?user_id=<?php echo $res0['acc_id']; ?>" enctype="multipart/form-data">
                        <input type="hidden" name="s_id" value="<?php echo $res0['s_id']; ?>">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="row">
                                    <div class="col-md-12 pb-3">
                                        <label><small><strong>PROFILE IMAGE</strong></small></label>
                                        <div class="col-lg-12 profile_img_con">
                                            <img id="image_preview" src="<?php echo $res0['s_img']; ?>">
                                        </div>
                                        <input type="hidden" name="pi" value="<?php echo $res0['s_img']; ?>">
                                        <input type="file" name="profile_image" id="profile_image" class="form-control" value="<?php echo $res0['s_img']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="form-group col-lg-5 col-md-6">
                                        <label><small><strong>FIRST NAME <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="s_first_name" name="s_first_name" class="form-control" placeholder="e.g. Juan " value="<?php echo $res0['s_first_name']; ?>">
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6">
                                        <label><small><strong>MIDDLE NAME </strong></small></label>
                                        <input type="text" id="s_middle_name" name="s_middle_name" class="form-control" placeholder="e.g. Dela " value="<?php echo $res0['s_middle_name']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>LAST NAME <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="s_last_name" name="s_last_name" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['s_last_name']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>SUFFIX NAME </strong></small></label>
                                        <select class="form-control" id="s_suffix_name" name="s_suffix_name">
                                        <option value="<?php echo $res0['s_suffix_name']; ?>">Active (<?php echo $res0['s_suffix_name']; ?>)</option>
                                            <option value="">- Select -</option>
                                            <option value="Jr.">Jr.</option>
                                            <option value="Sr.">Sr.</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4">
                                        <label><small><strong>EXT. </strong></small></label>
                                        <input type="text" id="s_extension" name="s_extension" class="form-control" placeholder="e.g. Cruz" value="<?php echo $res0['s_extension']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4">
                                        <label><small><strong>DESIGNATION <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="s_designation" name="s_designation" class="form-control" placeholder="e.g. Icto Director" value="<?php echo $res0['s_designation']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4">
                                        <label><small><strong>SALUTATION <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="s_salutation" name="s_salutation" class="form-control" placeholder="e.g. " value="<?php echo $res0['s_salutation']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>SEX</strong></small></label>
                                        <select class="form-control" id="s_sex" name="s_sex">
                                        <option value="<?php echo $res0['s_sex']; ?>">Active (<?php echo $res0['s_sex']; ?>)</option>
                                            <option value="">- Select -</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label><small><strong>MOBILE NUMBER <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="s_mobile" name="s_mobile" class="form-control" placeholder="e.g. 0956424564" value="<?php echo $res0['s_mobile']; ?>" maxlength="14">
                                    </div>
                                    <div class="form-group col-lg-7 col-md-7">
                                        <label><small><strong>AGENCY <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="s_agency" name="s_agency" class="form-control" placeholder="e.g. GSU" value="<?php echo $res0['s_agency']; ?>">
                                    </div>
                                    <div class="form-group col-lg-5 col-md-5">
                                        <label><small><strong>OFFICE <span class="text-danger">*</span></strong></small></label>
                                        <input type="text" id="s_office" name="s_office" class="form-control" placeholder="e.g. ICTO" value="<?php echo $res0['s_office']; ?>">
                                    </div>
                                    <div class="form-group col-lg-12 text-center">
                                        <button class="form-btn form-btn-md btn-blue" type="submit" id="btn_update" name="btn_update"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>  

                        <h2 class="pb-2 pt-3 text-left"><strong>RESET PASSWORD</strong></h2>
                        <div class="d-flex justify-content-start pb-2">
                            <div class="row">
                                <form method="post" action="edit-supervisor.php?user_id=<?php echo $res0['acc_id']; ?>">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="hidden" name="acc_id_reset" value="<?php echo $res0['acc_id']; ?>">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-red btn_reset" id="btn_reset" type="button"><i class="fa fa-qrcode"></i> <strong>GENERATE</strong></button>
                                            </div>
                                            <input type="text" class="form-control text-center" name="acc_password_reset" id="acc_password_reset" placeholder="e.g. d1O8BpJm" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-blue" type="submit" id="btn_save" name="btn_save"><i class="fa fa-refresh" aria-hidden="true"></i> <strong>RESET</strong></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

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

        $('#btn_reset').click(function(){
            randomString();
        });

        function randomString() {
            var code = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz0123456789";
                    
            //specify the length for the new string
            var lenString = 8;
            var randomstring = '';

            //loop to select a new character in each iteration
            for (var i=0; i<lenString; i++) {
                var rnum = Math.floor(Math.random() * code.length);
                randomstring += code.substring(rnum, rnum+1);
            }

            //display the generated string 
            $("#acc_password_reset").val(randomstring);
        }
    });
    </script>
</body>
</html>
