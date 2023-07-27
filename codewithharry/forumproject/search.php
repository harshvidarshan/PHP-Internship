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
  <!-- search logic -->
   <!-- ALTER TABLE threads add FULLTEXT(`thread_name`,`thread_desc`); -->

    <div class="container my-4">
    <h4 class="text-center">Search for:<b><em><?php echo $_GET['search'];?></em> </b></h4>
    <?php

    $query = $_GET['search'];

    $search = "SELECT * FROM threads WHERE MATCH(thread_name,thread_desc) against ('$query')";
    $resultsearch = mysqli_query($con,$search);
    
    $noResults = false;
    while($rows = mysqli_fetch_assoc($resultsearch))
    {
      $noResults=true;
      $searchh = $rows['thread_name'];
      $searchdesc = $rows['thread_desc'];
      echo '<a href="" class="my-2">'.$searchh.'</a>'.'<br/>'.$searchdesc.'<br/>';
    }
    if(!$noResults)
    {
      echo '<div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-6">No Records Found</h1>
              <p class="lead">
              <ul>
              <li>Make sure that all words are spelled correctly.</li>
              <li>Try different keywords.</li>
              <li>Try more general keywords.</li>
              </ul>
              </p>
            </div>
          </div>';
    }
    ?>
    
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
