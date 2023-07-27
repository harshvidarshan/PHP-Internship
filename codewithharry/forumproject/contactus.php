<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="partials/formstyle.css">
    <title>Welcome to iForums!</title>
  </head>
  <body>
    <?php
    require 'partials/dbconnect.php'; 
    require 'partials/header.php';
    
 
  
    ?>

    <div class="container my-3">
      <h4 class="text-center">Contact Us</h4>
        <header>
            <h1 id="title">forumWEB</h1>
            <p id="descripiton">Thank you for taking the time to help us improve the platform </p>
        </header>
        <form id="survey-form" method="POST">
            <div class="form-group">
                <label id='name-label'for="name">Name</label>
                <input class="first-input" type="text" required name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label id='email-label'for="email">Email</label>
                <input class="first-input" type="email" required name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label id='number-label'for="number">Age</label>
                <input class="first-input" type="number" required name="number" min="14" max="99" placeholder="Enter your age">
            </div>
         
            <div class="form-group">
                <p>Would you recommend iforums to a friend?</p>
                <label class="second-form">
                    <input name="recomendation" value="definitely" type="radio">
                    Definitely
                </label>
                <label class="second-form">
                    <input name="recomendation" value="maybe" type="radio">
                    Maybe
                </label>
                <label class="second-form">
                    <input name="recomendation" value="not-sure" type="radio">
                    Not sure
                </label>
            </div>
            <div class="form-group">
                <p>What would you like to see improved?</p>
                <label class="second-form">
                    <input type="checkbox" name="prefer" value="front-end-projects">
                    Front-end projects
                </label>
                <label class="second-form">
                    <input type="checkbox" name="prefer" value="back-end-projects">
                    Back-end projects
                </label>
                <label class="second-form">
                    <input type="checkbox" name="prefer" value="data-visualitzation">
                    Data Visualitzation
               
            </div>
            <div class="forum-groups">
                <p>Any comments or suggestions?</p>
                <textarea name="" id="suggestions" name="suggestion" placeholder="Enter your comment here..." class="third-input"></textarea>
            </div>
            <div class="forum-groups">
                <button id="submit" type="submit">Submit</button>
            </div>
          </form>
    </div>
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php 
$showAlert=true;
if($_SERVER['REQUEST_METHOD'] == "POST")
{
include 'partials/dbconnect.php';
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$recomendation = $_POST['recomendation'];
$prefer = $_POST['prefer'];
$suggestion = $POST['suggestion'];

$insertdata = "INSERT INTO `contactus` (`contact_name`, `contact_email`, `contact_age`, `contact_recommend`, `contact_improvement`, `contact_comments`, `created`) VALUES ( '$name', '$email', '$number', '$recomendation', '$prefer', '$suggestion', current_timestamp())";

$result = mysqli_query($con,$insertdata);
if($result)
{
  $showAlert=true;
}
else
{
  $showAlert=false;
}
}
if($showAlert)
{
  echo "data inserted successfully";
}
else
{
  echo "data not inserted ";
}
?>