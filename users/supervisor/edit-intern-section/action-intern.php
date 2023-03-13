<?php
if(isset($_POST['btn_deactivate'])){
    $acc_id2 = $_POST['acc_id'];
    $acc_status = "deactivated";

    $sql = mysqli_query($db, "UPDATE accounts_tbl SET acc_status='$acc_status' WHERE acc_id='$acc_id2'");

    echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
            Account deactivated successfully!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
}

if(isset($_POST['btn_activate'])){
    $acc_id2 = $_POST['acc_id'];
    $acc_status = "activated";

    $sql = mysqli_query($db, "UPDATE accounts_tbl SET acc_status='$acc_status' WHERE acc_id='$acc_id2'");

    echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
            Account activated successfully!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
}
?>