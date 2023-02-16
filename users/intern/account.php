<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Scrolling Nav - Start Bootstrap Template</title>
        <?php include("include/style.php"); ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include("include/nav.php"); ?>
            <div class="container pt-5 d-flex justify-content-center">
            <div class="card col-lg-4 col-md-6 col-sm-8" style="margin-top: 15%;">
                <div class="card-body">
                    <h3 class="card-title"><center>Account Settings</center></h3>
                    <div class="row">
                        <div class="form-group col-lg-12 mb-2">
							<label><small><strong>EMAIL <span class="text-danger">*</span></strong></small></label>
							<input type="email" name="acc_email_address" class="form-control" placeholder="e.g. juan@gmail.com">
						</div>
                        <div class="form-group col-lg-12 mb-2">
							<label><small><strong>PASSWORD <span class="text-danger">*</span></strong></small></label>
							<input type="password" name="" class="form-control" placeholder="">
						</div>
                        <div class="form-group col-lg-12 mb-2">
							<label><small><strong>NEW PASSWORD <span class="text-danger">*</span></strong></small></label>
							<input type="password" name="" class="form-control" placeholder="">
						</div>
                        <div>
                            <button class="btn btn-sm btn-success col-md-3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
                            <button class="btn btn-sm btn-danger col-md-3"><i class="fa fa-times-circle" aria-hidden="true"></i>Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        <?php include("include/script.php"); ?>
    </body>
</html>
