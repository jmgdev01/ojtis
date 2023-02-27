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
    include("configuration-section/update-configuration.php");
    include("configuration-section/display-configuration.php");
    include("include/nav.php"); ?>
    
        <div class="container py-5">

            <form method="POST" action="configuration.php">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body pb-3 px-4">
                                <h2 class="pb-2 text-left"><strong>LIST OF CONFIGURATIONS</strong></h2>
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <th>No.</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <td></td>
                                            <td></td>
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