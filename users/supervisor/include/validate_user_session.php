<?php 
if(isset($_SESSION['acc_role']) && $_SESSION['acc_role'] == 'admin') {
   	header('location: ../users/admin/index.php');
}
if(isset($_SESSION['acc_role']) && $_SESSION['acc_role'] == 'trainer') {
	header('location: ../users/trainer/index.php');
}
if(isset($_SESSION['acc_role']) && $_SESSION['acc_role'] == 'intern') {
   	header('location: ../users/intern/index.php');
}
if(!(isset($_SESSION['acc_role']) && $_SESSION['acc_role'] != '')) { 
   	header('location: ../../index.php');
} 
?>