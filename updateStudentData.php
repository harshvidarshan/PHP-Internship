<?php 
 $con = mysqli_connect("localhost","root","","student");

if($_POST['submit'])
{
 	  $id = $_POST['sid'];
 		  $ftname= $_POST['fname'];
          $ltname= $_POST['lname'];
          $address= $_POST['address'];
          $std = $_POST['std'];
          $birthdate= $_POST['birthdate'];
          $mobile= $_POST['mobile'];
           
          $update = "UPDATE studentinfo SET firstname='$ftname',lastname='$ltname',address='$address',std='$std',birthdate='$birthdate',mobilenumber='$mobile' where ID = $id "; 
          $result =  mysqli_query($con,$update);
      
          header("Location:crudStudentForm.php");
     } 
?>