<?php
    $sql0 = mysqli_query($db, "SELECT * FROM configuration_tbl WHERE cf_id='$manage_configuration_id'");
    $res0 = mysqli_fetch_assoc($sql0);
?>