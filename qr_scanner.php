
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
            body{
                background-color: white !important;
            }
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

        </style>
        <?php 
            include("function/style.php"); 
        ?>
        
        <script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>
    </head>
    <body id="page-top">
    <div class="container">
        <div id="qr-reader"></div>
        <script>
            function onScanSuccess(decodedText) {
                alert(decodedText);
            }
            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", { fps: 10, qrbox: 250 });
            html5QrcodeScanner.render(onScanSuccess);
        </script>
    </div>
</body>
</html>
