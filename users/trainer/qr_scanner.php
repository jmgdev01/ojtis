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
        <title>Account - OJT Information System</title>
        <style>
    #preview {
        display: block;
        margin: auto;
    }
</style>
        <?php 
            include("include/style.php"); 
        ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>
    </head>
    <body id="page-top">
        <?php include("include/nav.php"); ?>
       
        <div id="qr-reader" style="width: 600px"></div>

        <?php include("include/script.php"); ?>
        <script>
            function onScanSuccess(decodedText, decodedResult) {
                console.log(`Code scanned = ${decodedText}`, decodedResult);
            }
            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", { fps: 10, qrbox: 250 });
            html5QrcodeScanner.render(onScanSuccess);
        </script>
    </body>
</html>
