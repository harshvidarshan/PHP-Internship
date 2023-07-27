<?php 
echo "session is used to store information in web servers<br/>";
//to start session
session_start();
$_SESSION['username']="Harshvi";
$_SESSION['password']="harshvi98";
echo "session created";
session_unset();
session_destroy();
?>