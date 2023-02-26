<?php
$sql = mysqli_query($db, "SELECT * FROM accounts_tbl 
INNER JOIN intern_tbl ON accounts_tbl.i_id = intern_tbl.i_id 
WHERE accounts_tbl.acc_id='$acc_id'");
$res = mysqli_fetch_assoc($sql);
?>