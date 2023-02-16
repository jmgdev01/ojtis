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
            <div class="card mt-5 col-lg-8 col-md-6 col-sm-8">
                <div class="card-body">
                    <h3 class="card-title"><center><strong>Profile</strong></center></h3>
                    <div class="row">
                        <div class="form-group col-lg-3 col-md-7">
							<label><small><strong>FIRST NAME <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="i_fname" class="form-control" placeholder="e.g. Juan">
						</div>
                        <div class="form-group col-lg-3 col-md-7">
							<label><small><strong>MIDDLE NAME <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="i_mname" class="form-control" placeholder="e.g. Juan">
						</div>
                        <div class="form-group col-lg-3 col-md-7">
							<label><small><strong>LAST NAME <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="i_lname" class="form-control" placeholder="e.g. Juan">
						</div>
                        <div class="form-group col-lg-3 col-md-5">
							<label><small><strong>EXT.</strong></small></label>
							<select class="form-control">
								<option value="">- Select -</option>
								<option value="Jr.">Jr.</option>
								<option value="Sr.">Sr.</option>
								<option value="III">III</option>
								<option value="IV">IV</option>
								<option value="V">V</option>
							</select>
						</div>
                        <div class="form-group col-lg-3 col-md-3">
							<label><small><strong>SEX <span class="text-danger">*</span></strong></small></label>
							<select class="form-control">
								<option value="">- Select -</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
                        <div class="form-group col-lg-3 col-md-3">
							<label><small><strong>CIVIL STATUS <span class="text-danger">*</span></strong></small></label>
							<select class="form-control">
								<option value="">- Select -</option>
								<option value="Single">Single</option>
								<option value="Married">Married</option>
								<option value="Widow">Widow</option>
							</select>
						</div>
                        <div class="form-group col-lg-3 col-md-3">
							<label><small><strong>HEIGHT <span class="text-danger">*</span></strong></small></label>
							<input type="number" name="i_height" class="form-control" placeholder="cm" min="1">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>WEIGHT <span class="text-danger">*</span></strong></small></label>
							<input type="number" name="i_weight" class="form-control" placeholder="kg" min="1">
						</div>
                        <div class="form-group col-lg-3 col-md-3">
							<label><small><strong>DATE OF BIRTH <span class="text-danger">*</span></strong></small></label>
							<input type="date" name="i_bdate" class="form-control">
						</div>
						<div class="form-group col-lg-2 col-md-2">
							<label><small><strong>AGE <span class="text-danger">*</span></strong></small></label>
							<input type="number" name="i_bdate" class="form-control">
						</div>
						<div class="form-group col-lg-4 col-md-4">
							<label><small><strong>PLACE OF BIRTH <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="i_bdate" class="form-control" placeholder="e.g. Jaro, Ililo">
						</div>
						<div class="form-group col-lg-3 col-md-3">
							<label><small><strong>NATIONALITY <span class="text-danger">*</span></strong></small></label>
							<input type="text" name="i_age" class="form-control" placeholder="e.g. Filipino">
						</div>
                        <div class="form-group col-lg-12 pt-4">
							<h3><strong>SKILLS</strong></h3>
						</div>
                        <div class="form-group col-lg-12 col-md-12">
							<label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label>
							<textarea type="text" name="" row="3" class="form-control" placeholder="e.g. Playing Basketball, Developing Applications, etc."></textarea>
							<label><small>Separate each <strong>skill</strong> with <code>semicolon ( ; )</code></small></label>
						</div>
                        <div class="form-group col-lg-12 col-md-12">
							<label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label>
							<textarea type="text" name="" row="3" class="form-control" placeholder="e.g. Playing Basketball, Developing Applications, etc."></textarea>
							<label><small>Separate each <strong>skill</strong> with <code>semicolon ( ; )</code></small></label>
						</div>
                        <div class="form-group col-lg-12 pt-1">
							<h3><strong>TRAININGS AND SEMINARS</strong></h3>
						</div>
                        <div class="form-group col-lg-12 col-md-12">
							<label><small><strong>DESCRIPTION <span class="text-danger">*</span></strong></small></label>
							<textarea type="text" name="" row="3" class="form-control" placeholder="e.g. Web Development, Computer Hardware Servicing, etc."></textarea>
							<label><small>Separate each <strong>training</strong> and <strong>seminar</strong> with <code>semicolon ( ; )</code></small></label>
						</div>
                    </div>
                </div>
            </div>
            
            </div>
        <?php include("include/script.php"); ?>
    </body>
</html>
