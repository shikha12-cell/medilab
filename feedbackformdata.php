<?php

$con=mysqli_connect('localhost','root');

if($con){
	echo"Connection Successful";
} else{
	echo"No connection";
}

mysqli_select_db($con,'medicinesearch');
 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];

$query = "insert into feedbackformdata (firstname, lastname, subject) values('$firstname','$lastname','$subject')";

mysqli_query($con,$query);

header("location:thankyou.html");

?>