<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - OJT Information System</title>
        <?php include("include/style.php"); ?>
    </head>
    <body id="page-top">
        <?php 
        include("index-section/update-configuration.php");
        include("index-section/select-account.php");
        include("include/nav.php"); ?>
        <div class="container pt-5 pb-5">

            <form action="index.php" method="post">
            <input type="hidden" name="acc_id" value="<?php echo $res['acc_id']; ?>">
                <div class="row">
                    <div class="col-lg-7 pb-4">
                        <input type="hidden" id="email_qrcode" value="<?php echo $res['i_code']; ?>" name="email_qrcode">
                        <h1 class="text-center">
                            <strong>
                                Welcome!
                                <span class="text-danger">
                                <?php echo $res['i_first_name']; ?>
                                </span>
                            </strong>
                        </h1>
                        <div class="text-center">
                            <div class="card mx-auto card_con">
                                <div class="card-body">
                                    <label><small><strong>Use this QR Code to log your Attendance</strong></small></label>
                                    <br><br>
                                    <div class="col-sm-12" id="qrcode"></div>
                                    <br>
                                    <label>
                                        <small>
                                            <strong>Reminder: </strong>Place the entire code inside the scanner's viewport
                                        </small>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5" id="conf_body">
                        <h4 class="pb-2 text-center"><strong>CONFIGURATION</strong></h4>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 mb-4 border rounded">
                                    <h6 class="pb-2 conf_title"><strong class="text-danger">PROGRAM</strong></h6>
                                    <div class="form-group">
                                        <label><small><strong>DEPARTMENT</strong></small></label>
                                        <select class="form-control" id="cf_department">
                                            <?php 
                                            if($res['cf_id'] != ''){
                                                $sql1 = mysqli_query($db, "SELECT cf_department FROM configuration_tbl WHERE cf_id='".$res['cf_id']."' AND CURDATE() BETWEEN cf_speriod AND cf_eperiod");
                                                $res1 = mysqli_fetch_assoc($sql1);
                                                if(mysqli_num_rows($sql1)){
                                                    echo "<option value='".$res1['cf_department']."'>Active (".$res1['cf_department'].")</option>";
                                                } else {
                                                    echo "<option value=''>- Select -</option>";
                                                }
                                            } else {
                                                echo "<option value=''>- Select -</option>";
                                            } 
                                            ?>
                                            <?php 
                                            $sql2 = mysqli_query($db, "SELECT cf_id, cf_department FROM configuration_tbl WHERE CURDATE() BETWEEN cf_speriod AND cf_eperiod GROUP BY cf_department ORDER BY cf_department ASC");
                                            while($res2 = mysqli_fetch_assoc($sql2)){
                                            ?>
                                                <option value="<?php echo $res2['cf_department']; ?>"><?php echo $res2['cf_department']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group" id="cf_program_con">
                                        <label><small><strong>COURSE</strong></small></label>
                                        <select class="form-control" name="cf_id">
                                            <?php 
                                            if($res['cf_id'] != ''){
                                                $sql2 = mysqli_query($db, "SELECT cf_id, cf_program FROM configuration_tbl WHERE cf_id='".$res['cf_id']."' AND CURDATE() BETWEEN cf_speriod AND cf_eperiod");
                                                $res2 = mysqli_fetch_assoc($sql2);
                                                if(mysqli_num_rows($sql2) > 0){
                                                    echo "<option value='".$res2['cf_id']."'>Active (".$res2['cf_program'].")</option>";
                                                } else {
                                                    echo "<option value=''>- Select -</option>";
                                                }
                                            } else {
                                                echo "<option value=''>- Select -</option>";
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 border rounded">
                                    <h6 class="pb-2 conf_title"><strong class="text-danger">OJT CENTER</strong></h6>
                                    <div class="form-group">
                                        <label><small><strong>AGENCY</strong></small></label>
                                        <select class="form-control" id="s_agency">
                                            <?php 
                                            if($res['s_id'] != ''){
                                                $sql3 = mysqli_query($db, "SELECT s_agency FROM supervisor_tbl WHERE s_id='".$res['s_id']."'");
                                                $res3 = mysqli_fetch_assoc($sql3);
                                                echo "<option value='".$res3['s_agency']."'>Active (".$res3['s_agency'].")</option>";
                                            } else {
                                                echo "<option value=''>- Select -</option>";
                                            } 
                                            ?>
                                            <?php 
                                                $sql4 = mysqli_query($db, "SELECT s_agency FROM supervisor_tbl GROUP BY s_agency ORDER BY s_agency ASC");
                                                while($res4 = mysqli_fetch_assoc($sql4)){
                                            ?>
                                                <option value="<?php echo $res4['s_agency']; ?>"><?php echo $res4['s_agency']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group" id="s_office_con">
                                        <label><small><strong>OFFICE</strong></small></label>
                                        <select class="form-control" id="s_id" name="s_id">
                                            <?php 
                                            if($res['s_id'] != ''){
                                                $sql3 = mysqli_query($db, "SELECT s_id, s_office FROM supervisor_tbl WHERE s_id='".$res['s_id']."'");
                                                $res3 = mysqli_fetch_assoc($sql3);
                                                echo "<option value='".$res3['s_id']."'>Active (".$res3['s_office'].")</option>";
                                            } else {
                                                echo "<option value=''>- Select -</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <div id="s_supervisor_trainer_con">
                                        <div class="form-group">
                                            <label><small><strong>SUPERVISOR</strong></small></label>
                                            <input type="text" class="form-control" 
                                            value="<?php if($res['s_id'] != ''){
                                                    $sql3 = mysqli_query($db, "SELECT s_id, s_first_name, s_middle_name, s_last_name, s_suffix_name, s_extension FROM supervisor_tbl WHERE s_id='".$res['s_id']."'");
                                                    $res3 = mysqli_fetch_assoc($sql3);
                                                    echo $res3['s_first_name']." ";
                                                    if($res3['s_middle_name'] != ''){
                                                        echo substr($res3['s_middle_name'], 0, 1).". ";
                                                    }
                                                    echo $res3['s_last_name']; 
                                                    if($res3['s_suffix_name'] != ''){
                                                        echo " ".$res3['s_suffix_name'];
                                                    }
                                                    if($res3['s_extension'] != ''){
                                                        echo ", ".$res3['s_extension'];
                                                    }
                                                } else {
                                                    echo " - Select - ";
                                                }?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label><small><strong>TRAINER</strong></small></label>
                                            <select class="form-control" name="tr_id">
                                                <?php 
                                                if($res['tr_id'] != ''){
                                                    $sql4 = mysqli_query($db, "SELECT tr_id, tr_first_name, tr_middle_name, tr_last_name, tr_suffix_name FROM trainer_tbl WHERE tr_id='".$res['tr_id']."'");
                                                    $res4 = mysqli_fetch_assoc($sql4);
                                                    echo "<option value='".$res4['tr_id']."'>Active (";
                                                    echo $res4['tr_first_name']." ";
                                                    if($res4['tr_middle_name'] != ''){
                                                        echo substr($res4['tr_middle_name'], 0, 1).". ";
                                                    }
                                                    echo $res4['tr_last_name']; 
                                                    if($res4['tr_suffix_name'] != ''){
                                                        echo " ".$res4['tr_suffix_name'];
                                                    }
                                                    echo ")</option>";
                                                    
                                                } else {
                                                    echo "<option value=''>- Select -</option>";
                                                } 
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="form-btn form-btn-md btn-blue" type="submit" name="btn_save" id="btn_save">
                                            <strong>
                                                <i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE
                                            </strong>
                                        </button>
                                        <button class="form-btn form-btn-md btn-red" type="button" name="btn_edit" id="btn_edit">
                                            <strong>
                                                <i class="fa fa-pencil" aria-hidden="true"></i> EDIT
                                            </strong>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <?php include("include/script.php"); ?>
        <script>
            $(document).ready(function() {

                $("#msg_alert").delay(3000).fadeOut();

                form_disabled();

                function form_disabled() {
                    $('#btn_save').hide();
                    $('#btn_edit').show();
                    $('#conf_body input').attr("disabled", true);
                    $('#conf_body select').attr("disabled", true);
                }

                function form_enabled() {
                    $('#btn_save').show();
                    $('#btn_edit').hide();
                    $('#conf_body input').attr("disabled", false);
                    $('#conf_body select').attr("disabled", false);
                }

                $('#btn_edit').click(function(){
                    form_enabled();
                });

                var email_qrcode = $('#email_qrcode').val();
                $("#qrcode").qrcode({
                    size: 250,
                    fill: '#000000',
                    text: email_qrcode,
                    mode: 3,
                    fontcolor: '#000000'
                });

                $('select#cf_department').on('change', function() {
                var cf_department = $(this).val();

                    $.ajax({
                    url : "configuration-section/select-program.php",
                    method : "POST",
                    data : {cf_department:cf_department},
                    success : function(data){
                        $('#cf_program_con').html(data);
                    }
                    });
                });

                $('select#s_agency').on('change', function() {
                var s_agency = $(this).val();

                    $.ajax({
                    url : "center-section/select-office.php",
                    method : "POST",
                    data : {s_agency:s_agency},
                    success : function(data){
                        $('#s_office_con').html(data);
                    }
                    });
                });
            });
        </script>
    </body>
</html>
