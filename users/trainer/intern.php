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
    <title>Trainer</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php include("include/nav.php"); ?>

        <div class="container py-5">  
        <button class="btn btn-blue print_hide" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i> Print</button>   
            <div class="row d-flex justify-content-center pt-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body pb-3 px-4">
                            <h2 class="pb-2 text-center"><strong>LIST OF TRAINER</strong></h2>
                            <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th style="width:5%;">#</th>
                                    <th style="width:10%;">Name</th>
                                    <th style="width:10%;">Email Address</th>
                                    <th style="width:10%;">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $count = 1;
                                $sql = mysqli_query($db, "SELECT * FROM trainer_tbl INNER JOIN accounts_tbl ON trainer_tbl.tr_id = accounts_tbl.tr_id WHERE acc_role = 'trainer'");
                                while($row = mysqli_fetch_assoc($sql)){
                                ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php 
                                    echo ucfirst($row['tr_first_name'])." ";
                                    if($row['tr_middle_name'] != ''){
                                        echo ucfirst(substr($row['tr_middle_name'], 0, 1)).". ";
                                    }
                                    echo ucfirst($row['tr_last_name']); 
                                    if($row['tr_suffix_name'] != ''){
                                        echo " ".$row['tr_suffix_name'];
                                    }
                                    ?></td>
                                    <td><?php echo $row['acc_email_address']; ?></td>
                                    <td><?php echo ucfirst($row['acc_role']); ?></td>
                                </tr>
                                <?php 
                                $count++;
                            } ?>
                            </tbody>
                            </table>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

    <?php include("include/script.php"); ?>
</body>
</html>