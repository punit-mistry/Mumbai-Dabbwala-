<?php
$db_host="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="insert";
$db_connect=mysqli_connect($db_host,$db_username,$db_password,$db_name);
if (mqsli_connect_error())
 {
  echo "Failed to connect to MySQL: ". mysqli_connect_error();
 }
?>







