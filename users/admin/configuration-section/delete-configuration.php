<?php
 if (isset($_POST['btn_delete'])) {
    $cf_id_delete = $_POST['cf_id_delete'];

    $sql = mysqli_query($db, "DELETE FROM configuration_tbl WHERE cf_id='$cf_id_delete'");

    echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
            Configuration deleted successfully!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>"; 
 }
?>