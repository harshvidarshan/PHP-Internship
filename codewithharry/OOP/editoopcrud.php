<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Record</title>
    <style type="text/css">
      .error
      {
        color: red;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h4>PHP OOPS Form</h4>
      <?php 
      include ('phpcrud.php'); 
      include ('formvalidation.php');
      

      $sno=$_GET['id'];
      $con = mysqli_connect("localhost","root","","harshvi");
      $selectdata = "SELECT `sno`, `name`, `email`, `mobile` FROM `emp` WHERE sno=$sno";
      $resultdata = mysqli_query($con,$selectdata);
      $row = mysqli_fetch_assoc($resultdata);
    
      echo '<form method="POST">';
      echo '<div class="mb-3">
              <label for="name" class="form-label">Username<span class="error"> *';
              if($_SERVER["REQUEST_METHOD"]=="POST")
              {
               $name  = $_POST['name'];
              $valid = new validname();
              if($name=="")
                {
                  echo "please enter name";
                }
                else
                {
                  $valid->checkname($name);
                }
              }
      echo   '</span></label>';
      echo   '<input type="text" class="form-control" id="name" name="name" value="'.$row['name'].'">
            </div>';
      echo  '<div class="mb-3">
              <label for="email" class="form-label">Email address<span class="error"> *';
              if($_SERVER['REQUEST_METHOD']=="POST")
              { 
              $email = $_POST['email']; 
              $valid = new validemail();
              if($email=="")
              {
                echo "please enter your emailID";
              }
              else
              {
                $valid->checkemail($email);
              }
             }
      echo  '</span></label>';
      echo  '<input type="email" class="form-control" id="email" name="email" value="'.$row['email'].'">
            </div>';
      echo  '<div class="mb-3">
              <label for="mobile" class="form-label">Mobile<span class="error">*';
              if($_SERVER['REQUEST_METHOD']=="POST")
              { 
              $mobile = $_POST['mobile']; 
              $valid = new validmobile();
              if($mobile=="")
              {
                echo "please enter your Mobile Number";
              }
              else
              {
                $mobilev=$valid->checkmobile($mobile);
              }
             }
      echo  '</span></label>';
      echo  '<input type="phone" class="form-control" id="mobile" name="mobile" value="'.$row['mobile'].'" pattern="[0-9]{10}">
            </div>';

      echo  '<button type="submit" class="btn btn-success">Submit</button>
          </form>';
     
      if($_SERVER["REQUEST_METHOD"]=="POST")
      { 
          $obj = new query();
          if($name!="" && $email!="" && $mobile!="" && preg_match("/^([a-zA-Z' ]+)$/",$name) && preg_match("/^[0-9]{10}$/",$mobile))
          {
          $obj->updateData($name,$email,$mobile);
          }
        }
   ?>
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