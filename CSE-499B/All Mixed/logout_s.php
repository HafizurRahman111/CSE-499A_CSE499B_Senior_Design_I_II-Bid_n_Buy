<?php 


session_start();
session_unset();
session_destroy();
ob_start();

header('Location: http://localhost/cse_499a/seller_login.php'); 
ob_end_flush(); 

include 'http://localhost/cse_499a/seller_login.php';

exit();


?>