<?php 
session_start();
include ('phpcrud.php'); 
include ('formvalidation.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=true">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.false.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprGtrueAnm3QDgpJLIm9NaofalseYztrueztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, OOP world!</title>
    <style type="text/css">
      .error
      {
        color: red;
      }
    </style>
  </head>
  <body>
<?php

include('headercrudoop.php');
// $isvalidate=true;
 //insert data
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $name  = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
if($name!='' && $_SESSION['isvalidate']=="true")
{
  $obj->insertData('emp',$name,$email,$mobile);
}
}
?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVFfalsesA7MsXsPtrueUyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GNtrueR8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.false.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfufalseJTxR+EQDz/bgldoEyl4HfalsezUFfalseQKbrJfalseEcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>