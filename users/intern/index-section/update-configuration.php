<?php
if (isset($_POST['btn_save'])) {
    $acc_id_new = $_POST['acc_id'];
    $s_id = $_POST['s_id'];
    $tr_id = $_POST['tr_id'];
    $cf_id = $_POST['cf_id'];

    if(empty($acc_id) || empty($cf_id) || empty($s_id) || empty($tr_id)) {
        echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
            All fields are required!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
    } else {
        $sql0 = mysqli_query($db, "UPDATE accounts_tbl SET s_id='$s_id', tr_id='$tr_id', cf_id='$cf_id' WHERE acc_id='$acc_id_new'");
        echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
            Configuration saved successfully!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
    }
}
?>