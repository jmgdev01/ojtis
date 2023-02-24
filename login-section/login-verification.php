<?php 
include('../function/config.php');

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST["action"])){
	$output = '';
	if($_POST["action"]=="Login"){
	  $acc_email_address = test_input($_POST["acc_email_address"]);
	  $acc_password = test_input($_POST["acc_password"]);

	  $sql = mysqli_query($db, "SELECT * FROM accounts_tbl WHERE acc_email_address='$acc_email_address' AND acc_password='$acc_password'");

	  if(mysqli_num_rows($sql) > 0){
	  	while($res = mysqli_fetch_assoc($sql)){

			$acc_id = $res['acc_id']; 
		    $acc_email_address = $res['acc_email_address'];
		    $acc_role = $res['acc_role'];
		    
			ini_set('session.cookie_lifetime','31536000');
		    session_start();
		    $_SESSION['acc_id'] = $acc_id;
		    $_SESSION['acc_email_address'] = $acc_email_address;
		    $_SESSION['acc_role'] = $acc_role;
	  	}
	  	if($acc_role == "admin"){
	  		echo $output = 'admin';
	  	}
	  	if($acc_role == "supervisor"){
	  		echo $output = 'supervisor';
	  	}
		if($acc_role == "trainer"){
			echo $output = 'trainer';
		}
	  	if($acc_role == "intern"){
	  		echo $output = 'intern';
	  	}
	  } else {
	  	echo $output = "User doesn't exist.";
	  }
	}	
}
?>