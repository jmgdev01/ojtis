<?php
$sql = mysqli_query($db, "SELECT * FROM accounts_tbl INNER JOIN admin_tbl ON accounts_tbl.a_id = admin_tbl.a_id WHERE accounts_tbl.acc_id='$acc_id'");
$res = mysqli_fetch_assoc($sql);
?>