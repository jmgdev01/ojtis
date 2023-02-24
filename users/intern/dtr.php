<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    $sql = mysqli_query($db, "SELECT * FROM accounts_tbl WHERE acc_id='$acc_id'");
    $res = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DTR - OJT Information System</title>
        <?php include("include/style.php"); ?>
    </head>
    <body id="page-top">
        <?php include("include/nav.php"); ?>
        <div class="container pt-5">
            <h2 class="pb-3"><strong>DTR</strong></h2>
            
        </div>
        <?php include("include/script.php"); ?>
    </body>
</html>
