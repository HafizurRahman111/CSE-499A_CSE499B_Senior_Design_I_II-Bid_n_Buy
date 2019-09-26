<?php 





session_start();
session_unset();
session_destroy();
ob_start();

header('Location: http://localhost/a_test/buyer_login.php'); 
ob_end_flush(); 
include 'http://localhost/a_test/buyer_login.php';
//include 'http://localhost/a_test/buyer_login.php';
exit();











?>