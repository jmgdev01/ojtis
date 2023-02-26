<?php 

include('../../../function/config.php');

$output = '';
$s_id = $_POST["s_id"];

$sql5 = mysqli_query($db, "SELECT s_id, s_first_name, s_middle_name, s_last_name, s_suffix_name, s_extension FROM supervisor_tbl WHERE s_id='$s_id'");
$res5 = mysqli_fetch_assoc($sql5);

$output .= '
<div class="form-group">
    <label><small><strong>SUPERVISOR</strong></small></label>
    <input type="text" class="form-control" value="';
    if(mysqli_num_rows($sql5) > 0){
        $output .= $res5['s_first_name']." ";
        if($res5['s_middle_name'] != ''){
            $output .= substr($res5['s_middle_name'], 0, 1).". ";
        }
        $output .= $res5['s_last_name']; 
        if($res5['s_suffix_name'] != ''){
            $output .= " ".$res5['s_suffix_name'];
        }
        if($res5['s_extension'] != ''){
            $output .= ", ".$res5['s_extension'];
        }
    } else {
        $output .= '- No supervisor available -';
    }
    $output .= '" readonly>
</div>

<div class="form-group">
    <label><small><strong>TRAINER</strong></small></label>
    <select class="form-control" name="tr_id">';
    $sql6 = mysqli_query($db, "SELECT tr_id, tr_first_name, tr_middle_name, tr_last_name, tr_suffix_name FROM trainer_tbl WHERE s_id='$s_id'");
    if(mysqli_num_rows($sql6) > 0){
        while($res6 = mysqli_fetch_assoc($sql6)){
            $output .= '<option value="'.$res6['tr_id'].'">';
            $output .= $res6['tr_first_name']." ";
            if($res6['tr_middle_name'] != ''){
                $output .= substr($res6['tr_middle_name'], 0, 1).". ";
            }
            $output .= $res6['tr_last_name']; 
            if($res6['tr_suffix_name'] != ''){
                $output .= " ".$res6['tr_suffix_name'];
            }
            $output .= '</option>';
        }
    } else {
        $output .= '<option value="">- No trainer available -</option>';
    }
    $output .= '</select>
</div>';

echo $output;
?>