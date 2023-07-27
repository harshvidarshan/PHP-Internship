<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome to iForums!</title>
  </head>
  <body>
    <?php 
    require 'partials/dbconnect.php';
    require 'partials/header.php';
    ?>
   <!--  <?php

    // if(isset($_GET['showAlert']))
    // {
    //   echo '<div class="alert alert-success" role="alert">
    //         You are not logged in successfully :(
    //         </div>';
    // } 
    // else
    // {
      // echo '<div class="alert alert-success" role="alert">
      //       You are successfully logged in :)
      //     </div>';
    //}
    ?> -->
    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/1600x500/?coding,python" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1600x500/?coding,microsoft" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1600x500/?coding,google" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container my-3">
      <h1 class="text-center">Categories</h1>
   
   <div class="row">
<!--     for loop showing all categories-->
  <?php 
  $fetchcategories = "SELECT * FROM `categories`";
  $result = mysqli_query($con,$fetchcategories);

  while($rows = mysqli_fetch_assoc($result))
  {
    $id=$rows['sno'];
    $categorylist = $rows['categoryname'];
    $categorydes = $rows['description'];
    echo '<div class="col-md-3 mb-2">
               <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/500x400/?coding,'.$categorylist.'" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="http://localhost/training/codewithharry/forumproject/threadlist.php?id='.$id.'">'.$categorylist.'</a></h5>
                    <p class="card-text">'.substr($categorydes,0, 110).'...</p>
                    <a href="http://localhost/training/codewithharry/forumproject/threadlist.php?id='.$id.'" class="btn btn-primary">View Threads</a>
                  </div>
              </div>
           </div>';
    }
      ?>
    </div>
  </div>
    <?php 
    require 'partials/footer.php';
    ?>
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
