<?php

// Db configs.
define('HOST', 'localhost');
define('PORT', 3306);
define('DATABASE', 'cse_499a');
define('USERNAME', 'root');
define('PASSWORD', 'root');
define('CHARSET', 'utf8');


$mysqliDriver = new mysqli_driver();
$mysqliDriver->report_mode = (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE, PORT);

?>