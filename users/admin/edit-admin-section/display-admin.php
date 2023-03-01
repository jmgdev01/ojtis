<?php
$sql0 = mysqli_query($db, "SELECT * FROM admin_tbl INNER JOIN accounts_tbl ON admin_tbl.a_id = accounts_tbl.a_id WHERE accounts_tbl.a_id='$manage_admin_id'");
$res0 = mysqli_fetch_assoc($sql0);
?>