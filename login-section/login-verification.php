<?php
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
		<div id="msg_alert" class="alert bg-danger alert-dismissible fade show" role="alert">
		  <strong>Invalid username or password!</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
		';
	}
}
?>