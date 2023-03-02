<?php
if(isset($_POST['btn_update'])){
    $a_id = $_POST['a_id'];
    $a_fullname = $_POST['a_fullname'];
    $a_mobile = $_POST['a_mobile'];

    $file_name = $_FILES['profile_image']['name'];
    $file_tmp = $_FILES['profile_image']['tmp_name'];
    $pi = $_POST['pi'];

    if(empty($a_fullname) || empty($a_mobile) || empty($pi) && empty($file_name)) {
        // Alert if text fields are empty
        echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
            All fields are required!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
    } else {
        move_uploaded_file($file_tmp, "../../assets/profile/admin/" . $file_name);
        $img_store = "../../assets/profile/admin/" . $_FILES['profile_image']['name'];

        $image = '';
        if($file_name != '') {
            $image = $img_store;
        } else {
            $image = $pi;
        }

        // Update admin details
        $sql1 = mysqli_query($db, "UPDATE admin_tbl SET a_fullname='$a_fullname', a_img='$image', a_mobile='$a_mobile' WHERE a_id='$a_id'");

        echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
                Profile updated successfully!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
    }
}

if(isset($_POST['btn_save'])){
    $acc_id = $_POST['acc_id_reset'];
    $acc_password_reset = $_POST['acc_password_reset'];

    if (strlen($acc_password_reset) < 6) {
        echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                Password length is less than 6 characters!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
    } else {
        // Reset password
        $sql2 = mysqli_query($db, "UPDATE accounts_tbl SET acc_password='$acc_password_reset' WHERE acc_id='$acc_id'");

        echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
                Password successfully reset!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
    }
}
?>