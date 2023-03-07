<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];
    $get_user = mysqli_query($db, "SELECT * FROM admin_tbl INNER JOIN accounts_tbl ON admin_tbl.a_id = accounts_tbl.a_id WHERE accounts_tbl.acc_id='$acc_id'");
    $retrieve_info = mysqli_fetch_assoc($get_user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>List of Configurations - OJT Information System</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php 
    include("include/nav.php");
    include("edit-admin-section/action-admin.php");
    ?>

    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 d-flex justify-content-between pb-3">
                <button class="form-btn form-btn-sm btn-blue d_hide" onclick="window.location.href='add-configuration.php'"><strong><i class="fa fa-plus"></i> ADD</strong></button>
                <button class="form-btn form-btn-sm btn-teal d_hide" onclick="window.print()"><strong><i class="fa fa-print"></i> PRINT</strong></button>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body pb-3 px-4">
                        <div class="card_logo_con remove_margin_top">
                            <img src="../../assets/logo/logo-small.png" class="card_logo" alt="">
                            <label><strong>OJT Information System</strong></label>
                        </div>
                        <h2 class="text-center card_title"><strong>LIST OF CONFIGURATIONS</strong></h2>
                        <div class="card_logo_con pb-3">
                            <label><?php echo date("F j, Y h:i A"); ?></label>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 table-responsive">
                            <table class="table table-condensed table-sm" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                    <th width="5%" class="text-center">#</th>
                                    <th width="30%">Subject</th>
                                    <th width="15%">Hours</th>
                                    <th width="40%">Program</th>
                                    <th width="10%" class="text-center d_hide">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $count = 1;
                                    $sql = mysqli_query($db, "SELECT * FROM configuration_tbl");
                                    if(mysqli_num_rows($sql) > 0){
                                    while($res = mysqli_fetch_assoc($sql)){
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo $count; ?></td>
                                            <td><?php echo "<strong>".$res['cf_subject_code']."</strong> <br> <small>".$res['cf_subject']."</small>"; ?></td>
                                            <td><?php echo $res['cf_hours']; ?></td>
                                            <td><?php echo "<strong>".$res['cf_program']."</strong><br><small>".$res['cf_program']."</small>"; ?></td>
                                            <td class="d_hide">
                                                <div class="row d-flex justify-content-center">
                                                    <button 
                                                    onclick="window.location.href='edit-configuration.php?cf_id=<?php echo $res['cf_id']; ?>'"
                                                    class="form-btn form-btn-sm btn-blue mr-1" 
                                                    type="button"><i class="fa fa-pencil-square-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php 
                                    $count++;
                                    } 
                                    }
                                ?>
                                </tbody>
                            </table> 
                            </div>
                        </div>
                        <div class="card_footer">
                            <br><br>
                            <label>Prepared by</label>
                            <br><br>
                            <h4 style="margin-bottom: 0;"><strong><?php echo strtoupper($retrieve_info['a_fullname']); ?></strong></h4>
                            <label>Administrator</label>
                        </div>
                    </div>
                </div>  

            </div>
        </div>  
    </div>

    <?php include("include/script.php"); ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#dataTable').DataTable();

        $("#msg_alert").delay(3000).fadeOut();
    });
    </script>
</body>
</html>
