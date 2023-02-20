<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    $sql = mysqli_query($db, "SELECT * FROM accounts_tbl WHERE acc_id='$acc_id'");
    $res = mysqli_fetch_assoc($sql);

    if (isset($_POST['btn_save'])) {
        $acc_email_address = $_POST['acc_email_address'];
        $old_password = $_POST['acc_password'];
        $new_password = $_POST['new_acc_password'];

        $sql1 = mysqli_query($db, "SELECT acc_password FROM accounts_tbl WHERE acc_email_address='$acc_email_address'");
        $res1 = mysqli_fetch_assoc($sql1);

        if (isset($_POST['btn_save'])) {
            $acc_email_address = $_POST['acc_email_address'];
            $old_password = $_POST['acc_password'];
            $new_password = $_POST['new_acc_password'];
        
            // check if any of the fields are empty
            if (empty($acc_email_address) || empty($old_password) || empty($new_password)) {
                echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                    All fields are required!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
            } else {
                $sql1 = mysqli_query($db, "SELECT acc_password FROM accounts_tbl WHERE acc_email_address='$acc_email_address'");
                $res1 = mysqli_fetch_assoc($sql1);
        
                if($res1['acc_password'] == $old_password) {
                    if($old_password != $new_password){
                        $sql1 = mysqli_query($db, "UPDATE accounts_tbl SET acc_password='$new_password' WHERE acc_email_address='$acc_email_address'");
                        echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
                            Password updated successfully!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                    } else {
                        echo "<div id='msg_alert' class='alert bg-warning text-dark alert-dismissible fade show' role='alert'>
                            New and Old password is the same.
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                    }
                } else {
                    echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                        Invalid Old Password!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
                }
            }
        }
        
    }
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body id="page-top">
        <?php include("include/nav.php"); ?>
        <div class="container py-5">
            <h3 class="pb-2"><strong><center>ACCOUNT SETTING</center></strong></h3>

            <form method="post" action="account.php">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5 col-md-6 col-sm-8">
                        <div class="card">
                            <div class="card-body pb-2 px-4">
                                <div class="form-group">
                                    <label><small><strong>EMAIL OR USERNAME</strong></small></label>
                                    <input type="email" id="acc_email_address" name="acc_email_address" class="form-control" value="<?php echo $res['acc_email_address']; ?>">
                                </div>
                                <div class="form-group">
                                    <label><small><strong>OLD PASSWORD</strong></small></label>
                                    <div class="input-group">
                                    <input type="password" id="acc_password" name="acc_password" class="form-control" value="">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><small><strong>NEW PASSWORD</strong></small></label>
                                    <div class="input-group">
                                    <input type="password" id="new_acc_password" name="new_acc_password" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword2">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
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
    </body>
</html>
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
        eyeIcon.classList.toggle('fa-eye');
        eyeIcon.classList.toggle('fa-eye-slash');
    });
</script>
<!-- script for the (eye icon) show new_password icon -->
<script>
    const togglePassword2 = document.querySelector('#togglePassword2');
    const passwordInput2 = document.querySelector('#new_acc_password');

    togglePassword2.addEventListener('click', function (e) {
        // toggle the type attribute
        const type2 = passwordInput2.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput2.setAttribute('type', type2);
        
        // toggle the eye icon
        const eyeIcon2 = togglePassword2.querySelector('i');
        eyeIcon2.classList.toggle('fa-eye');
        eyeIcon2.classList.toggle('fa-eye-slash');
    });
</script>
