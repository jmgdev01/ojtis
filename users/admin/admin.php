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
    <title>Admin</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body pb-3 px-4">
                        <h2 class="pb-2 text-center"><strong>LIST OF ADMINISTRATORS</strong></h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $count = 1;
                                    $sql = mysqli_query($db, "SELECT * FROM admin_tbl INNER JOIN accounts_tbl
                                    ON admin_tbl.a_id = accounts_tbl.a_id")
                                    while($row = mysqli_fetch_assoc($sql)){}
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php?>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tbody>
                            </table> 
                    </div>
                </div>    
            </div>
        </div>  
    </div>
</body>
</html>
