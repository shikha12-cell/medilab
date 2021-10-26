<?php
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"SELECT * FROM `login` WHERE id=$id");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$username;
	}
}
if (isset($_SESSION["login"]))
{
echo "<h1 align=center>Hye you are sucessfully login!!!</h1>";
exit;
}
?>
