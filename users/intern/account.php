<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");
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
            <h3 class="pb-2"><strong>ACCOUNT SETTING</strong></h3>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-8">
                    <div class="card">
                        <div class="card-body pb-2 px-4">
                            <div class="form-group">
                                <label><small><strong>EMAIL OR USERNAME</strong></small></label>
                                <input type="email" id="acc_email_address" class="form-control" placeholder="e.g. juan@gmail.com">
                            </div>
                            <div class="form-group">
                                <label><small><strong>OLD PASSWORD</strong></small></label>
                                <input type="password" id="acc_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label><small><strong>NEW PASSWORD</strong></small></label>
                                <input type="password" id="new_acc_password" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <button class="form-btn form-btn-md btn-blue" id="btn_save"><strong>Save</strong></button>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            
        </div>
        <?php 
            include("include/script.php"); 
        ?>
    </body>
</html>
