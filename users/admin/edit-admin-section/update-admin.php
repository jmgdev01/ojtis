<?php
$manage_admin_id = $_GET['manage_admin_id'];
if(isset($_POST['update'])){
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
        move_uploaded_file($file_tmp, "../../assets/profile/" . $file_name);
        $img_store = "../../assets/profile/" . $_FILES['profile_image']['name'];

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
?>