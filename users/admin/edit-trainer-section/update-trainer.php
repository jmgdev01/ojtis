<?php
if (isset($_POST['btn_update'])) {
    $tr_id = $_POST['tr_id'];
    $tr_first_name = $_POST['tr_first_name'];
    $tr_middle_name = $_POST['tr_middle_name'];
    $tr_last_name = $_POST['tr_last_name'];
    $tr_suffix_name = $_POST['tr_suffix_name'];
    $tr_sex = $_POST['tr_sex'];
    $tr_mobile = $_POST['tr_mobile'];
    
    $file_name = $_FILES['profile_image']['name'];
    $file_tmp = $_FILES['profile_image']['tmp_name'];
    $pi = $_POST['pi'];

    if (empty($tr_first_name) || empty($tr_last_name) || empty($tr_sex) || empty($tr_mobile) || empty($pi) && empty($file_name)) {
        // Alert if text fields are empty
        echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                All fields are required!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
     } else {

        // Upload image from your computer to the project directory
        move_uploaded_file($file_tmp, "../../assets/profile/trainer/" . $file_name);
        $img_store = "../../assets/profile/trainer/" . $_FILES['profile_image']['name'];

        $image = '';
        if($file_name != '') {
            $image = $img_store;
        } else {
            $image = $pi;
        }

        // Update supervisor details
        $sql1 = mysqli_query($db, "UPDATE trainer_tbl SET tr_first_name='$tr_first_name', tr_middle_name='$tr_middle_name', tr_last_name='$tr_last_name', tr_suffix_name='$tr_suffix_name', tr_img='$image', tr_sex='$tr_sex', tr_mobile='$tr_mobile' WHERE tr_id='$tr_id'");

        // Alert if update is successful
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