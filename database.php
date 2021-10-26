<?php
session_start();
$url ="localhost:";
$username = "root";
$password = "";
$db = "medilab";
$conn = mysqli_connect('localhost', 'root', '','medilab');
if(!$conn){
	die("Connection error:". mysqli_connect_error());
}
else{
echo "Connected Successfully!!";
}

?>