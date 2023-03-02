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
    <title>Configuration</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php include("include/nav.php"); ?>

        <div class="container py-5">     
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body pb-3 px-4">
                            <h2 class="pb-2 text-center"><strong>LIST OF SUPERVISOR</strong></h2>
                            <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th style="width:5%;">#</th>
                                    <th style="width:10%;">Name</th>
                                    <th style="width:10%;">Designation</th>
                                    <th style="width:15%;">Agency - Office</th>
                                    <th style="width:10%;">Email Address</th>
                                    <th style="width:10%;">Role</th>
                                    <th style="width:10%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $count = 1;
                                $sql = mysqli_query($db, "SELECT * FROM supervisor_tbl INNER JOIN accounts_tbl ON supervisor_tbl.s_id = accounts_tbl.s_id WHERE acc_role = 'supervisor'");
                                while($row = mysqli_fetch_assoc($sql)){
                                ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php 
                                    echo ucfirst($row['s_first_name'])." ";
                                    if($row['s_middle_name'] != ''){
                                        echo ucfirst(substr($row['s_middle_name'], 0, 1)).". ";
                                    }
                                    echo ucfirst($row['s_last_name']); 
                                    if($row['s_suffix_name'] != ''){
                                        echo " ".$row['s_suffix_name'];
                                    }
                                    if($row['s_extension'] != ''){
                                        echo ", ".$row['s_extension'];
                                    }
                                    ?></td>
                                    <td><?php echo $row['s_designation']; ?></td>
                                    <td><?php echo $row['s_agency']."<br>".$row['s_office']; ?></td>
                                    <td><?php echo $row['acc_email_address']; ?></td>
                                    <td><?php echo ucfirst($row['acc_role']); ?></td>
                                    <td>
                                        <div class="row d-flex justify-content-center">
                                            <div>
                                                <a href="edit_supervisor.php?manage_supervisor_id=<?php echo $row['s_id'] ?>">
                                                <button class="btn btn-blue btn-sm" type="submit" name="edit">Edit</button></a>
                                            </div>
                                            <button class="btn btn-red btn-sm" type="button" value="Disable">Deactive</button>
                                        </div>
                                    </td>
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