<?php
$sql0 = mysqli_query($db, "SELECT * FROM accounts_tbl 
INNER JOIN supervisor_tbl ON accounts_tbl.s_id = supervisor_tbl.s_id 
WHERE accounts_tbl.acc_id='$user_id'");
$res0 = mysqli_fetch_assoc($sql0);
?>