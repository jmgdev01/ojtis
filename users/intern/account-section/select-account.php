<?php
$sql = mysqli_query($db, "SELECT * FROM accounts_tbl WHERE acc_id='$acc_id'");
$res = mysqli_fetch_assoc($sql);
?>