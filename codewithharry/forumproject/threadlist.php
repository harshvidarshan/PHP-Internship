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
       $id = $_GET['id'];
      $sql = "SELECT * FROM categories where sno = $id ";
      $result = mysqli_query($con,$sql);
      while($rows = mysqli_fetch_assoc($result))
      {
       
        $categorylist = $rows['categoryname'];
        $categorydes = $rows['description'];
        $thread_user_id = $rows['sno'];
            // fetching useremail
        $selectemail = "SELECT user_email FROM users where user_id='$thread_user_id'";
        $resultmail = mysqli_query($con,$selectemail);
        $rowmail = mysqli_fetch_assoc($resultmail);
        $mailid = $rowmail['user_email'];

      } 
      ?>
       <div class="jumbotron bg-light">
            <h1 class="mx-2 my-2"><?php echo $categorylist;?></h1>
            <p class="lead mx-2">&nbsp;<?php echo $categorydes;?></p>
            <hr class="my-4">
            <p class="mx-2">It uses utility classes for typography and spacing to space content out within the larger container.</p>
             <h6 class="my-3"><em>Posted by:- <?php echo $mailid;?></em></h6>
        </div>

        <h1 class="my-4">Browse Questions</h1>
        <?php 
          $id = $_GET['id'];
          $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
          $result = mysqli_query($con,$sql);
          $noResults=false;
          while($rows = mysqli_fetch_assoc($result))
          {
           $noResults=true;
            $threadname = $rows['thread_name'];
            $threaddesc = $rows['thread_desc'];
            $thread_user_id = $rows['thread_user_id'];

            $selectemail = "SELECT user_email FROM `users` WHERE user_id = '$thread_user_id'";
            $resultdata = mysqli_query($con,$selectemail);
            $row = mysqli_fetch_assoc($resultdata);
            $username=$row['user_email'];

          
          if($noResults)
          {

          echo '<div class="media">
                  <div class="media-body">
                  <img src="images/user.png" height="25px" alt="..."> '.$username.'
                    <h5 ><a href="thread.php?id='.$id.'" alt="">'.$threadname.'</a></h5>
                    <p>'.$threaddesc.'</p>
                  </div>
                </div>';
          }
        }
        ?>
        <?php 
        if($noResults)
        {
           echo '<form class="my-5" method="POST" action="'.$_SERVER['REQUEST_URI'].'">
                  <div class="mb-3">
                    <label for="threadname" class="form-label">Problem Title</label>
                    <input type="text" class="form-control" id="threadname" name="threadname" maxlength="455"/>
                    <small><sup>*</sup>Keep your title short and crisp as possible</small>
                  </div>
                  <div class="mb-3">
                    <label for="threaddesc" class="form-label">Problem Elaboration</label><br/>
                    <textarea class="form-control" id="threaddesc" name="threaddesc"></textarea>
                    
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>';
                
          echo '<div class="jumbotron jumbotron-fluid bg-light">
                  <div class="container">
                    <h4 class="display-8">Want to ask questions, fill above form</h4>
                    <p class="lead">Be first to ask questions.</p>
                  </div>
               </div>';
          if($_SERVER["REQUEST_METHOD"]=="POST")
          {
            $threadname = $_POST['threadname'];
            $threaddesc = $_POST['threaddesc'];

            $threadname = str_replace("<", "&lt", $threadname);
            $threadname = str_replace(">", "&gt", $threadname);

            $threaddesc = str_replace("<", "&lt", $threaddesc);
            $threaddesc = str_replace(">", "&gt", $threaddesc);

            $insertdata = "INSERT INTO `threads` (`thread_id`, `thread_name`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `date`) VALUES (NULL, '$threadname', '$threaddesc', '$id', '$thread_user_id', current_timestamp())";
            $resultdata = mysqli_query($con,$insertdata);
            //redirect('thread.php');
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