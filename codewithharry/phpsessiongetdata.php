<?php 
session_start();
if(isset($_SESSION['username']))
{
	echo "Hello ".$_SESSION['username'];
	echo "<br/>your password is ".$_SESSION['password'];
}
else
{
	echo "please login again";
}
session_unset();
session_destroy();
?>