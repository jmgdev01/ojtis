<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    $sql = mysqli_query($db, "SELECT * FROM accounts_tbl INNER JOIN admin_tbl ON accounts_tbl.a_id = admin_tbl.a_id WHERE accounts_tbl.acc_id='$acc_id'");
    $res = mysqli_fetch_assoc($sql);
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
        <?php include("include/nav.php"); ?>
        <div class="container pt-5">

            <input type="hidden" id="email_qrcode" value="<?php echo $res['acc_email_address']; ?>" name="email_qrcode">
            <h1 class="text-center">
                <strong>
                    Welcome!
                    <span class="text-danger">
                    <?php echo $res['a_fullname']; ?>
                    </span>
                </strong>
            </h1>
            <br>
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
        <?php include("include/script.php"); ?>
        <script>
            $(document).ready(function() {
                var email_qrcode = $('#email_qrcode').val();
                $("#qrcode").qrcode({
                    size: 250,
                    fill: '#000000',
                    text: email_qrcode,
                    mode: 3,
                    fontcolor: '#000000'
                });
            });
        </script>
    </body>
</html>
