<!DOCTYPE html>
<html>
<head>
	<title>CREATE CONNECT TABLE AND DATABASE</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","");
//create database
$sqlcreatedatabase =  "CREATE DATABASE harshvi";
$result = mysqli_query($con,$sqlcreatedatabase);
if($result)
{
	echo "your database is created successfully";
}
else
{
	echo "there is some technical error".mysqli_error($con);
}

//creating table
$sqlcreatetable = "CREATE TABLE `harshvi`.`studentdetails` (`ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(20) NOT NULL , `Email` VARCHAR(30) NOT NULL , PRIMARY KEY (`ID`))";
$result = mysqli_query($con,$sqlcreatetable);
if($result)
{
	echo "your table is created successfully";
}
else
{
	echo "there is some technical error".mysqli_error($con);
}
?>
</body>
</html>