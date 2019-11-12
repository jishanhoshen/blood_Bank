<?php
$server = "localhost";
$user = "root";
$password = "";
$DB = "bloodbank";
$conn = new mysqli($server,$user,$password,$DB);
if($conn->connect_error){ echo "Connection failed"; }
?>