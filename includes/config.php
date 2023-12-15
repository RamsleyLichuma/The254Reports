<?php
define('DB_SERVER','terraform-20231002010411504000000008.ctjten6aavan.us-east-2.rds.amazonaws.com');
define('DB_USER','z254User');
define('DB_PASS' ,'Td4aokFxFM0gY6XJ1o');
define('DB_NAME','xxxage_254reports');

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
