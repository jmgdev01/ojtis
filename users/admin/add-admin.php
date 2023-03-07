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
    <title>Account Details - OJT Information System</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php 
    include("include/nav.php");
    include("edit-admin-section/insert-admin.php");
    ?>
    
    <div class="container py-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="row pb-3">
                        <div class="col-lg-12">
                            <button class="form-btn form-btn-sm btn-dark" onclick="window.location.href='view-admin.php'"><i class="fa fa-arrow-left"></i> Back</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body pb-3 px-4">
                            <h2 class="pb-2 text-left"><strong>PROFILE</strong></h2>

                            <form method="POST" action="add-admin.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 pb-3">
                                            <label><small><strong>PROFILE IMAGE</strong></small></label>
                                            <div class="col-lg-12 profile_img_con">
                                                <img id="image_preview">
                                            </div>
                                            <input type="hidden" name="pi">
                                            <input type="file" name="profile_image" id="profile_image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="row">
                                        <div class="form-group col-lg-7 col-md-7">
                                            <label><small><strong>FULL NAME <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="a_fullname" name="a_fullname" class="form-control" placeholder="e.g. Juan Dela Cruz">
                                        </div>
                                        <div class="form-group col-lg-5 col-md-5">
                                            <label><small><strong>MOBILE NUMBER <span class="text-danger">*</span></strong></small></label>
                                            <input type="text" id="a_mobile" name="a_mobile" class="form-control" placeholder="e.g. 09123456789" maxlength="14">
                                        </div>
                                    </div>
                                </div>
                            </div>  

                            <h2 class="pb-2 pt-3 text-left"><strong>ACCOUNT SETTING</strong></h2>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6">
                                    <label><small><strong>EMAIL <span class="text-danger">*</span></strong></small></label>
                                    <input type="email" id="acc_email_address" name="acc_email_address" class="form-control" placeholder="e.g. juan@gmail.com">
                                </div>
                                <div class="form-group col-lg-6 col-md-6">
                                    <label><small><strong>PASSWORD <span class="text-danger">*</span></strong></small></label>
                                    <div class="input-group">
                                    <input type="password" id="acc_password" name="acc_password" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-dark" type="button" id="togglePassword">
                                            <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <small><strong>Password</strong> length shoud be at least <code>6-character long</code></small>
                                </div>
                            </div>

                            <div class="form-group col-lg-12 text-center">
                                <button class="form-btn form-btn-md btn-blue" type="submit" id="btn_save" name="btn_save"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE</strong></button>
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

    // script for toggle in password
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#acc_password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // toggle the eye icon
        const eyeIcon = togglePassword.querySelector('i');
        eyeIcon.classList.toggle('fa-toggle-off');
        eyeIcon.classList.toggle('fa-toggle-on');
    });
    </script>
</body>
</html>
