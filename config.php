<?php
/*
This file contains database configuration assuming you are ru
assuming you are running mysql using "rootO and password""



*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

//Try connectin to the Database
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,
DB_NAME);

//Check the connection
if($conn == false){
    dir('Error:Cannot connect');
}

?>