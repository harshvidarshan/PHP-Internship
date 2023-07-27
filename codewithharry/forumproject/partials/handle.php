<?php 
require 'dbconnect.php';
$showAlert=false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$useremail = $_POST['signupuseremail'];
	$userpassword = $_POST['signuppassword'];
	$usercpassword = $_POST['signupcpassword'];
	
	$sql = "SELECT * FROM `users` where user_email='$useremail'";
	$result = mysqli_query($con,$sql);
	$rows = mysqli_num_rows($result);
	if($rows > 0)
	{
		$showError = "Please enter other emailID, it already exists";
		header("Location: http://localhost/training/codewithharry/forumproject/index.php?success=false&showError=$showError");
	}
	else
	{
	if($userpassword == $usercpassword)
	{
		$passwordhash = password_hash($userpassword, PASSWORD_DEFAULT);
		$insertdata = "INSERT INTO `users` (`user_email`, `user_password`, `date`) VALUES ('$useremail', '$passwordhash', current_timestamp())";
		$resultinsert = mysqli_query($con,$insertdata);
		$showAlert=true;
		
		header("Location: http://localhost/training/codewithharry/forumproject/index.php?success=true");
		exit();
	}
	else
	{
		$showError = "Passwords do not match";
	}
	}
	header("Location: http://localhost/training/codewithharry/forumproject/index.php?success=false&showError=$showError");

}

?>