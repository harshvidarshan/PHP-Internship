<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	include 'dbconnect.php';
	$flattype = $_POST['flattype'];
	$carpetarea = $_POST['carpetarea'];
	$floor = $_POST['floor'];
	$wing = $_POST['wing'];
	$insert = "INSERT INTO `flat` (`userlogid`, `flat_bhk`, `flat_carpet`, `flat_floor`, `flat_wing`, `created`) VALUES ('1', '$flattype', '$carpetarea', '$floor', '$wing', current_timestamp())";
	$result = mysqli_query($con,$insert);
	// header("Location:http://localhost/training2/userpanel/form.php");
}
?>