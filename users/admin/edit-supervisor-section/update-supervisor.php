<?php
$manage_supervisor_id = $_GET['manage_supervisor_id'];
if (isset($_POST['update'])) {
    $s_id = $_POST['s_id'];
    $s_first_name = $_POST['s_first_name'];
    $s_middle_name = $_POST['s_middle_name'];
    $s_last_name = $_POST['s_last_name'];
    $s_suffix_name = $_POST['s_suffix_name'];
    $s_extension = $_POST['s_extension'];
    $s_sex = $_POST['s_sex'];
    $s_mobile = $_POST['s_mobile'];
    $s_agency = $_POST['s_agency'];
    $s_office = $_POST['s_office'];
    $s_designation = $_POST['s_designation'];
    $s_salutation = $_POST['s_salutation'];

    $file_name = $_FILES['profile_image']['name'];
    $file_tmp = $_FILES['profile_image']['tmp_name'];
    $pi = $_POST['pi'];

    if (empty($s_first_name) || empty($s_last_name) ||  empty($s_sex) || empty($s_mobile) || empty($s_agency) || empty($s_office) || empty($s_designation) || empty($s_salutation) || empty($pi) && empty($file_name)) {
        // Alert if text fields are empty
        echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                All fields are required!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";
     } else {

        // Upload image from your computer to the project directory
        move_uploaded_file($file_tmp, "../../assets/profile/" . $file_name);
        $img_store = "../../assets/profile/" . $_FILES['profile_image']['name'];

        $image = '';
        if($file_name != '') {
            $image = $img_store;
        } else {
            $image = $pi;
        }

        // Update supervisor details
        $sql1 = mysqli_query($db, "UPDATE supervisor_tbl SET s_first_name='$s_first_name', s_middle_name='$s_middle_name', s_last_name='$s_last_name', s_suffix_name='$s_suffix_name', s_extension='$s_extension', s_img='$img_store', s_sex='$s_sex', s_mobile='$s_mobile', s_agency='$s_agency', s_office='$s_office', s_designation='$s_designation', s_salutation='$s_salutation' WHERE s_id='$s_id'");

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