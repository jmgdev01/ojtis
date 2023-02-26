<?php
if (isset($_POST['btn_save'])) {
    $acc_id1 = $_POST['acc_id1'];
    $acc_email_address = $_POST['acc_email_address'];
    $old_password = $_POST['acc_password'];
    $new_password = $_POST['new_acc_password'];

    // Alert if text fields are empty
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
                $sql1 = mysqli_query($db, "UPDATE accounts_tbl SET acc_password='$new_password' WHERE acc_id='$acc_id1'");
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
?>