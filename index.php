<?php
include("include/config.php");

if(isset($_POST['btn_login'])=="POST") {
	$acc_username = $_POST["acc_username"];
	$acc_password = $_POST["acc_password"];

	$sql = mysqli_query($conn, "SELECT * FROM accounts_tbl WHERE acc_username='$acc_username' AND acc_password='$acc_password'");

	if(mysqli_num_rows($sql) > 0) {
		$row = mysqli_fetch_assoc($sql);
		
		session_start();
		$_SESSION['acc_id'] = $row['acc_id'];
		$_SESSION['acc_role'] = $row['acc_role'];

		if($row["role"]=="admin"){
			header("location: ");
		}
		elseif ($row["role"]=="supervisor"){
			header("location: ");
		}
		elseif ($row["acc_role"]=="intern"){
			header("location: ");
		}
	} else {
		echo '
		<div id="msg_alert" class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Invalid username or password!</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
		';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | OJT Information System</title>
	<?php include('include/style.php'); ?>
</head>
<body>

<div class="container_login_register">
	<div class="card card_container">
	  	<div class="card-body px-4 py-3">
		  	<div class="form-group text-center pt-2">
			  	<img src="assets/logo/logo-small.png" alt="">
				<h1 class="card_header">LOGIN</h1>
			</div>
			<form action="index.php" method="POST">
				<div class="form-group">
					<label><small><strong>EMAIL OR USERNAME</strong></small></label>
					<input type="text" name="" class="form-control" placeholder="e.g. juan@gmail.com">
				</div>
				<div class="form-group">
					<label><small><strong>PASSWORD</strong></small></label>
					<input type="password" name="" class="form-control">
				</div>
				<div class="form-group text-center">
					<button class="form-btn form-btn-md btn-blue" type="submit" name="btn_login"><strong>LOGIN</strong></button>
				</div>
			</form>
			<div class="form-group page_nav text-center">
				<span>Not yet registered? <span class="page_nav_label" onclick="location.href='register.php'">Create an account</span></span>
			</div>
  		</div>
	</div>
</div>

<?php include('include/script.php'); ?>
</body>
</html>