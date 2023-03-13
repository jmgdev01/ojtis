<?php
$manage_trainer_id = $_GET['manage_trainer_id'];
if (isset($_POST['update'])) {
    $tr_id = $_POST['tr_id'];
    $tr_first_name = $_POST['tr_first_name'];
    $tr_middle_name = $_POST['tr_middle_name'];
    $tr_last_name = $_POST['tr_last_name'];
    $tr_suffix_name = $_POST['tr_suffix_name'];
    $tr_sex = $_POST['tr_sex'];
    $tr_mobile = $_POST['tr_mobile'];
    
    // IMAGE
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

?>