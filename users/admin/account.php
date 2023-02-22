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
        <title>Account - OJT Information System</title>
        <?php 
            include("include/style.php"); 
        ?>
    </head>
    <body id="page-top">
        <?php include("include/nav.php"); ?>
        <div class="container py-5">
            <form method="post" action="account.php">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <div class="card">
                            <div class="card-body pb-2 px-4">
                                <h3 class="pb-2 text-center"><strong>ACCOUNT SETTING</strong></h3>
                                <div class="form-group">
                                    <label><small><strong>EMAIL OR USERNAME</strong></small></label>
                                    <input type="email" id="acc_email_address" name="acc_email_address" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label><small><strong>OLD PASSWORD</strong></small></label>
                                    <div class="input-group">
                                    <input type="password" id="acc_password" name="acc_password" class="form-control" value="">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button" id="togglePassword">
                                            <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><small><strong>NEW PASSWORD</strong></small></label>
                                    <div class="input-group">
                                    <input type="password" id="new_acc_password" name="new_acc_password" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button" id="togglePassword2">
                                            <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="form-btn form-btn-md btn-blue" type="submit" id="btn_save" name="btn_save"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</strong></button>
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
        <!-- script for the (eye icon) show old_password icon -->
        <script>
            const togglePassword = document.querySelector('#togglePassword');
            const passwordInput = document.querySelector('#acc_password');

            togglePassword.addEventListener('click', function (e) {
                // toggle the type attribute
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                // toggle the eye icon
                const eyeIcon = togglePassword.querySelector('i');
                eyeIcon.classList.toggle('fa-toggle-on');
                eyeIcon.classList.toggle('fa-toggle-off');
            });

            const togglePassword2 = document.querySelector('#togglePassword2');
            const passwordInput2 = document.querySelector('#new_acc_password');

            togglePassword2.addEventListener('click', function (e) {
                // toggle the type attribute
                const type2 = passwordInput2.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput2.setAttribute('type', type2);
                
                // toggle the eye icon
                const eyeIcon2 = togglePassword2.querySelector('i');
                eyeIcon2.classList.toggle('fa-toggle-on');
                eyeIcon2.classList.toggle('fa-toggle-off');
            });
        </script>
    </body>
</html>
