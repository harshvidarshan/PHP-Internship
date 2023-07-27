<?php
$con = mysqli_connect("localhost","root","","harshvi");
//to delete records
$deleterecords = "DELETE FROM studentdetails where Name='' AND EMAIL=''";
$result=mysqli_query($con,$deleterecords);
if($result)
{
	echo "you have deleted your account";
}
else
{
	echo "error occured".mysqli_error($con);
}
//if we want to delete last record then LIMIT 1
//to update records
$updaterecords = "UPDATE `studentdetails` SET `Email` = 'ghelani@darshan.ac.in' WHERE Name LIKE '% Ghelani'";
$result = mysqli_query($con,$updaterecords);
if($result)
{
	echo "all records updated successfully";
}
else
{
	echo "error".mysql_error($con);
}
?>