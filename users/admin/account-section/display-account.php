<?php
$sql0 = mysqli_query($db, "SELECT * FROM accounts_tbl WHERE acc_id='$acc_id'");
$res0 = mysqli_fetch_assoc($sql0);
?>