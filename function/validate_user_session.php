<?php 
if(isset($_SESSION['acc_role']) && $_SESSION['acc_role'] == 'admin'){
   	header('location: users/admin/index.php');
}elseif(isset($_SESSION['acc_role']) && $_SESSION['acc_role'] == 'supervisor'){
   	header('location: users/supervisor/index.php');
}elseif(isset($_SESSION['acc_role']) && $_SESSION['acc_role'] == 'intern'){
    header('location: users/intern/index.php');
}
?>