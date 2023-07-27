<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome to iForums!</title>
    <style type="text/css">
      #ques
      {
        min-height: 4000px;
      }
    </style>
  </head>
  <body>
    <?php 
    require 'partials/dbconnect.php';
    require 'partials/header.php';
    
    ?>
    
      <div class="container" id="ques">
       <?php
        $noResults=true; 
         $id = $_GET['id'];
          $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
          $result = mysqli_query($con,$sql);
          while($rows = mysqli_fetch_assoc($result))
          {
            $noResults=false;
            $threadname = $rows['thread_name'];
            $threaddesc = $rows['thread_desc'];
            $thread_user_id = $rows['thread_user_id'];
            // fetching useremail
            $selectemail = "SELECT user_email FROM users where user_id='$thread_user_id'";
            $resultmail = mysqli_query($con,$selectemail);
            $rowmail = mysqli_fetch_assoc($resultmail);
            $mailid = $rowmail['user_email'];
          } 
        ?>
       <div class="jumbotron bg-light">
            <h1 class="mx-2 my-2"><?php echo $threadname;?></h1>
            <p class="lead mx-2">&nbsp;<?php echo $threaddesc;?></p>
            <hr class="my-4">
            <p class="mx-2">It uses utility classes for typography and spacing to space content out within the larger container.</p>
             <h6 class="my-3"><em> by:- <?php echo $mailid;?></em></h6>
        </div>
         <h4>Start a Discussion</h4>
        <?php 
         if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
         {
            echo '<form class="my-2" method="POST" action="'. $_SERVER['REQUEST_URI'] .'">
                    <div class="mb-3">
                      <label for="commentname" class="form-label"><h5>Comments</h5></label>
                       
                        <textarea class="form-control" id="commentname" name="commentname"></textarea>
                    </div>
                     <button type="submit" class="btn btn-success">Post a Comment</button>
                  </form>';
         }
         else
         {
          echo "Please login for Discussions";
         }
        ?>
     <!--  <form class="my-2" method="POST" action="">
          <div class="mb-3">
          <label for="commentname" class="form-label"><h5>Comments</h5></label>
          <textarea class="form-control" id="commentname" name="commentname"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Post a Comment</button>
       </form> -->
       
        <h1>Discussions</h1>
        <?php 
        $id = $_GET['id'];

        $showAlerts = true;
        if(!$noResults)
        {
          $select = "SELECT * FROM `comments` WHERE thread_id=$id";
          $result = mysqli_query($con,$select);
          while($rows = mysqli_fetch_assoc($result))
          {
            //fetching all comments
            $sno = $rows['comments_id'];
            $commentname = $rows['comment_name'];
            $comment_id = $rows['comment_by'] ;


            $selectemail = "SELECT user_email FROM `users` WHERE user_id = '$comment_id'";
            $resultdata = mysqli_query($con,$selectemail);
            $row = mysqli_fetch_assoc($resultdata);
            $username = $row['user_email'];
            
             echo '
                <h6>Asked by: </h6><h5>'.$username.'</h5>at '.$rows['comment_date'].'
                <div class="jumbotron jumbotron-fluid bg-light">
                <div class="container">
                  <p class="lead">'.$commentname.'</p>
                </div>
                </div>';
          }
         
        } 
        //inserting all comments
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
        $comments = $_POST['commentname'];
        $comments = str_replace("<", "&lt", $comments);
        $comments = str_replace(">", "&gt", $comments);
        if($comments != NULL) 
        {
        $insertdata = "INSERT INTO `comments` (`comment_name`, `thread_id`, `comment_by`, `comment_date`) VALUES ('$comments', '$id', '$comment_id', current_timestamp())";
        $resultins = mysqli_query($con,$insertdata);
        if($showAlerts)
        {
          echo '<div class="alert alert-success" role="alert">
                  You have added comment successfully:)
                </div>';
        }
        }
        else
        {
          echo '<div class="alert alert-danger" role="alert">
                  Please type something:(
                </div>';
        }
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