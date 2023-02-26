<?php
$sql = mysqli_query($db, "SELECT * FROM accounts_tbl 
INNER JOIN supervisor_tbl ON accounts_tbl.s_id = supervisor_tbl.s_id 
INNER JOIN configuration_tbl ON accounts_tbl.cf_id = configuration_tbl.cf_id 
INNER JOIN signatories_tbl ON configuration_tbl.cf_id = signatories_tbl.cf_id 
WHERE accounts_tbl.acc_id='$acc_id'");
$res = mysqli_fetch_assoc($sql);

function ordinal($number) {
    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
    if ((($number % 100) >= 11) && (($number%100) <= 13)) {
        return $number. 'th';
    } else {
        return $number. $ends[$number % 10];
    }
}
?>