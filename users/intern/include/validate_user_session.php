<?php 
if(isset($_SESSION['acc_role']) && $_SESSION['acc_role'] == 'supervisor') {
   	header('location: ../users/supervisor/index.php');
}
if(isset($_SESSION['acc_role']) && $_SESSION['acc_role'] == 'admin') {
   	header('location: ../users/admin/index.php');
}
if(!(isset($_SESSION['acc_role']) && $_SESSION['acc_role'] != '')) { 
   	header('location: ../../index.php');
} 
?>