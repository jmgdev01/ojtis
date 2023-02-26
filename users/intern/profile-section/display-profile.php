<?php
$sql = mysqli_query($db, "SELECT * FROM accounts_tbl 
INNER JOIN intern_tbl ON accounts_tbl.i_id = intern_tbl.i_id 
INNER JOIN address_tbl ON intern_tbl.i_id = address_tbl.i_id 
INNER JOIN contacts_tbl ON intern_tbl.i_id = contacts_tbl.i_id 
INNER JOIN case_tbl ON intern_tbl.i_id = case_tbl.i_id 
INNER JOIN parent_tbl ON intern_tbl.i_id = parent_tbl.i_id
INNER JOIN educational_background_tbl ON intern_tbl.i_id = educational_background_tbl.i_id 
INNER JOIN emergency_tbl ON intern_tbl.i_id = emergency_tbl.i_id 
WHERE accounts_tbl.acc_id='$acc_id'");
$res = mysqli_fetch_assoc($sql);
?>