<?php
require('config.php');
$conn = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $conn);
?>
