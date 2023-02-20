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
        <title>Dashboard - OJT Information System</title>
        <?php 
            include("include/style.php"); 
        ?>
    </head>
    <body id="page-top">
        <?php include("include/nav.php"); ?>
        <div class="container pt-5">
            <h3><center>Update Profile Account Setting<center></h3>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="exampleInputEmail1" class="pt-2"><strong>Fullname</strong></label>
                        <input type="text" class="form-control col-md-7" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        
                        <label for="exampleInputEmail1" class="pt-2"><strong>Contact No</strong></label>
                        <input type="number" class="form-control col-md-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        
                        <label for="exampleInputEmail1" class="pt-2"><strong>Address</strong></label>
                        <input type="text" class="form-control col-md-7" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>  
                    
                    <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="pt-2"><strong>Agency/Company Name</strong></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    
                    <label for="exampleInputEmail1" class="pt-2"><strong>Designation</strong></label>
                    <input type="text" class="form-control col-md-7" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </div>

            </div>    
        </div>
        <?php 
            include("include/script.php"); 
        ?>
    </body>
</html>
