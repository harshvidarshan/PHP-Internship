<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include 'partialss/dbconnect.php';
  $name = $_POST['username'];
  $mobile = $_POST['phone'];
  $fs = $_POST['fs'];
  $insert = "INSERT INTO `userlog` (`username`, `usermob`, `flatshop`, `created`) VALUES ('$name', '$mobile', '$fs', current_timestamp())";
  $result = mysqli_query($con,$insert);
  
  // as per user choice page will be opened
    $sql = "SELECT * FROM `userlog` WHERE flatshop = '$fs' and username = '$name'";
    $resultsql = mysqli_query($con,$sql);
    $row = mysqli_num_rows($resultsql);
    if($row > 0)
    {
      $fetchdata = mysqli_fetch_assoc($resultsql);
      echo $fetchdata['flatshop'];
      if($fetchdata['flatshop'] == "flat")
      {
        header("Location:flat.php");
      }
      else
      {
        header("Location:shop.php");
      }
    }
  
}
?>