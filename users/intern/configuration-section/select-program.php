<?php 

include('../../../function/config.php');

$output = '';
$cf_department = $_POST["cf_department"];

$sql3 = mysqli_query($db, "SELECT cf_id, cf_program FROM configuration_tbl WHERE cf_department='$cf_department' AND CURDATE() BETWEEN cf_speriod AND cf_eperiod ORDER BY cf_program ASC");

$output .= '
<label><small><strong>Course</strong></small></label>
<select class="form-control" name="cf_id">';
  if(mysqli_num_rows($sql3) > 0){
    while($res3 = mysqli_fetch_assoc($sql3)){
        $output .= '<option value="'.$res3['cf_id'].'">'.$res3['cf_program'].'</option>';
    }
  } else {
    $output .= '<option value="">- Select -</option>';
  }
$output .= '</select>';

echo $output;
?>