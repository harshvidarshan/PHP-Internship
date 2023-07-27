<?php
session_start();
include 'dbconnect.php';
$sql= "SELECT categoryname,sno FROM `categories` ";
$results = mysqli_query($con,$sql);
 $rows = mysqli_fetch_assoc($results);
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ForumWeb</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/training/codewithharry/forumproject/index.php">Home</a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Top Categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
              <a class="dropdown-item" href="http://localhost/training/codewithharry/forumproject/threadlist.php?id='.$rows['sno'].'">'.$rows['categoryname'].'
              </a>
              </li>
              </ul>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="http://localhost/training/codewithharry/forumproject/aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/training/codewithharry/forumproject/contactus.php">Contact Us</a>
            </li>
        </ul>';
      // <!-- to show useremail -->
      //echo "hi";
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
      {
      echo '<p class="text-dark mx-2 my-1">Welcome '.$_SESSION['useremail'].'</p>
            <form class="d-flex" method="GET" action="search.php">
            <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success mx-2" type="submit">Search</button>
            <a href="logout.php" class="btn btn-success" type="submit">Logout</a>
            </form>';

      }
      else
      { 
      echo 
      // ' <p class="text-dark mx-2 my-1">Welcome Harshvi</p>
      '<form class="d-flex" method="GET" action="search.php">
        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
        </form>
        <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
       <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupmodal">SignUp</button>';
      }
    echo '</div>
          </div>
        </nav>';
?>
  <?php 
  include 'signup.php';
  include 'login.php';
  if(isset($_GET['success']) && $_GET['success']==true)
  {
    echo '<div class="alert alert-success" role="alert">
          You are successfully signed in:)
        </div>';
  }

  ?>
