<?php
define('DB_SERVER','sql309.infinityfree.com');
define('DB_USER','if0_38835279');
define('DB_PASS' ,'Nancy098');
define('DB_NAME', 'if0_38835279_ecommerce');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>