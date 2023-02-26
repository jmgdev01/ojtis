<?php 

include('../../../function/config.php');

$output = '';
$s_agency = $_POST["s_agency"];

$sql4 = mysqli_query($db, "SELECT s_id, s_office FROM supervisor_tbl WHERE s_agency='$s_agency' ORDER BY s_office ASC");

$output .= '
<label><small><strong>Office</strong></small></label>
<select class="form-control" id="s_id" name="s_id">';
  if(mysqli_num_rows($sql4) > 0){
    $output .= '<option value="">- Select -</option>';
    while($res4 = mysqli_fetch_assoc($sql4)){
        $output .= '<option value="'.$res4['s_id'].'">'.$res4['s_office'].'</option>';
    }
  } else {
    $output .= '<option value="">- Select -</option>';
  }
$output .= '</select>';

echo $output;
?>

<script type="text/javascript">
  $(document).ready(function(){
  $('select#s_id').on('change', function() {
       var s_id = $(this).val();
        $.ajax({
          url : "center-section/select-supervisor-trainer.php",
          method : "POST",
          data : {s_id:s_id},
          success : function(data){
            $('#s_supervisor_trainer_con').html(data);
          }
        });
    });
  });
</script>