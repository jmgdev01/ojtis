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
    <title>Configuration - OJT Information System</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php 
    
    include("include/nav.php"); ?>
    
        <div class="container py-5">

            <form method="POST" action="configuration.php">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body pb-3 px-4">
                                <h3 class="pb-2 text-left"><strong>LIST OF CONFIGURATIONS</strong></h3>
                                <div class="row">
                                    <table class="table table-sm">
                                        <thead>
                                            <th style="width: 5px">No.</th>
                                            <th style="width: 5px">subject code</th>
                                            <th>subject</th>
                                            <th>hours</th>
                                            <th>weeks equivalent</th>
                                            <th>start date</th>
                                            <th>school</th>
                                            <th>campus</th>
                                            <th>department</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $count = 1;
                                            $sql = mysqli_query($db, "SELECT * FROM configuration_tbl");
                                            while ($row = mysqli_fetch_assoc($sql)) {

                                            ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $row['cf_subject_code']; ?></td>
                                                <td><?php echo $row['cf_subject']; ?></td>
                                                <td><?php echo $row['cf_hours']; ?></td>
                                                <td><?php echo $row['cf_week_equivalent']; ?></td>
                                                <td><?php echo $row['cf_start_date']; ?></td>
                                                <td><?php echo $row['cf_school']; ?></td>
                                                <td><?php echo $row['cf_campus']; ?></td>
                                                <td><?php echo $row['cf_department']; ?></td>
                                                
                                                <td>
                                                <div class="row d-flex justify-content-center">
                                                    <div>
                                                    <a href="edit_configuration.php?manage_configuration_id=<?php echo $row['cf_id'] ?>" class="btn btn-blue btn-sm mr-2"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    </div>
                                                        <button class="btn btn-red btn-sm" type="button" value="Disable"><i class="fa fa-ban" aria-hidden="true"></i></button>
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
            </form>  

        </div>

    <?php include("include/script.php"); ?>
    <script>
    $(document).ready(function() {

        $("#msg_alert").delay(3000).fadeOut();
    });
    </script>
</body>
</html>