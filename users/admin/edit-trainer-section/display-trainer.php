<?php
$sql0 = mysqli_query($db, "SELECT * FROM accounts_tbl 
INNER JOIN trainer_tbl ON accounts_tbl.tr_id = trainer_tbl.tr_id 
WHERE accounts_tbl.tr_id='$manage_trainer_id'");
$res0 = mysqli_fetch_assoc($sql0);

?>