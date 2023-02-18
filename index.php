<?php
	include("function/session.php");
	include("function/validate_user_session.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | OJT Information System</title>
	<?php include('function/style.php'); ?>
</head>
<body>

<div class="container_login_register">
	<div class="card card_container">
	  	<div class="card-body px-4 py-3">
		  	<div class="form-group text-center pt-2">
			  	<img src="assets/logo/logo-small.png" alt="">
				<h1 class="card_header">LOGIN</h1>
			</div>

			<div id="msg_alert" class="alert alert-dismissible">
				<span id="msg"></span>
			</div>

			<div class="form-group">
				<label><small><strong>EMAIL OR USERNAME</strong></small></label>
				<input type="email" name="acc_email_address" id="acc_email_address" class="form-control" placeholder="e.g. juan@gmail.com">
			</div>
			<div class="form-group">
				<label><small><strong>PASSWORD</strong></small></label>
				<input type="password" name="acc_password" id="acc_password" class="form-control">
			</div>
			<div class="form-group text-center">
				<button class="form-btn form-btn-md btn-blue" id="btn-login" name="btn-login"><strong>LOGIN</strong></button>
			</div>
			<div class="form-group page_nav text-center">
				<span>Not yet registered? <span class="page_nav_label" onclick="location.href='register.php'">Create an account</span></span>
			</div>
  		</div>
	</div>
</div>

<?php include('function/script.php'); ?>
<script>
	$(document).ready(function(){
		
		$("#msg_alert").hide();

		$('#btn-login').click(function(){
			var acc_email_address = $('#acc_email_address').val();
			var acc_password = $('#acc_password').val();
			var action = "Login";

			var email_pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

			if(acc_email_address != '' && acc_password != ''){
			$.ajax({
			url : "login-section/login-verification.php",
			method : "POST",
			data : {acc_email_address:acc_email_address, acc_password:acc_password, action:action},
			success: function(data){
				if(data=="User doesn't exist."){
					if (email_pattern.test(acc_email_address)==true) {
					}else{
						$("#msg_alert").show();
						$("#msg_alert").removeClass("alert bg-primary text_bold alert-dismissible");
						$("#msg_alert").removeClass("alert bg-warning text_bolder text-dark alert-dismissible");
						$("#msg_alert").addClass("alert bg-danger text_bold alert-dismissible");
						$("#msg").text("Invalid email address.");
						$("#msg_alert").delay(3000).fadeOut();
					}
					$("#msg_alert").show();
					$("#msg_alert").removeClass("alert bg-danger text_bold alert-dismissible");
					$("#msg_alert").removeClass("alert bg-primary text_bold alert-dismissible");
					$("#msg_alert").addClass("alert bg-warning text_bolder text-dark alert-dismissible");
					$("#msg").text(data);
					$("#msg_alert").delay(3000).fadeOut();
				}else{
					$('#acc_email_address').val('');
					$('#acc_password').val('');
					$("#msg_alert").show();
					$("#msg_alert").removeClass("alert bg-danger text_bold alert-dismissible");
					$("#msg_alert").removeClass("alert bg-warning text_bolder text-dark alert-dismissible");
					$("#msg_alert").addClass("alert bg-primary text_bold alert-dismissible");
					$("#msg").text("You have login successfully.");
					$("#msg_alert").delay(3000).fadeOut();

					if(data == 'admin') {
						$(location).attr('href','users/admin/index.php');
					} else if(data == 'supervisor') {
						$(location).attr('href','users/admin/index.php');
					} else if(data == 'intern') {
						$(location).attr('href','users/admin/index.php');
					} 
				}
			}
			});
			}else{
			$("#msg_alert").show();
			$("#msg_alert").removeClass("alert bg-primary text_bold alert-dismissible");
			$("#msg_alert").removeClass("alert bg-warning text_bolder text-dark alert-dismissible");
			$("#msg_alert").addClass("alert bg-danger text_bold alert-dismissible");
			$("#msg").text("All fields are required.");
			$("#msg_alert").delay(3000).fadeOut();
			}
		});

	});
</script>
</body>
</html>