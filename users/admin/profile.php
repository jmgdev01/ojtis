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
                            <div class="card-body pb-2 px-4">
                                <h3 class="pb-2 text-center"><strong>PROFILE</strong></h3>
                                    <div class="row">
                                        <form action="profile.php" method="post">
                                            <div class="form-group col-lg-6 col-md-12">
                                                <label><small><strong>FULL NAME <span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_first_name" name="s_first_name" class="form-control" placeholder="e.g. Juan Dela Cruz" value="">
                                            </div>
                                            <div class="form-group col-lg-6 col-md-12">
                                                <label><small><strong>CONTACT NO<span class="text-danger">*</span></strong></small></label>
                                                <input type="text" id="s_mobile_no" name="s_mobile_no" class="form-control" placeholder="e.g. 09123456789" value="">
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
