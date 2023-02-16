<?php
if(isset($_POST['btn_login'])) {
	$acc_email_address = $_POST["acc_email_address"];
	$acc_password = $_POST["acc_password"];

	if ($acc_email_address != "" || $acc_password != "") {
		$sql = mysqli_query($conn, "SELECT * FROM accounts_tbl WHERE acc_email_address='$acc_email_address' AND acc_password='$acc_password'");

		if(mysqli_num_rows($sql) > 0) {
			$row = mysqli_fetch_assoc($sql);
			
			session_start();
			$_SESSION['acc_id'] = $row['acc_id'];
			$_SESSION['acc_role'] = $row['acc_role'];

			if($row["acc_role"]=="admin"){
				header("location: users/admin/index.php");
			}elseif ($row["acc_role"]=="supervisor"){
				header("location: users/supervisor/index.php");
			}elseif ($row["acc_role"]=="intern"){
				header("location: users/intern/index.php");
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
	} else {
		echo '
			<div id="msg_alert" class="alert bg-danger alert-dismissible fade show" role="alert">
				<strong>Fill out all the required fields!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		';
	}

	
}
?>