<?php
$con = mysqli_connect("localhost","root","","harshvi");
//to delete records
// $deleterecords = "DELETE FROM studentdetails where Name='' AND EMAIL=''";
// $result=mysqli_query($con,$deleterecords);
// if($result)
// {
// 	//for affected rows
// 	echo "you have deleted your account";
// 	// $rowsaffect = mysqli_affected_rows($deleterecords);
// 	// // echo mysqli_error($con);
// 	// // echo "number of rows affect".$rowsaffect;
// }
// else
// {
// 	echo "error occured".mysqli_error($con);
// }

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