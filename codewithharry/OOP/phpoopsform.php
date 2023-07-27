<?php 
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
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    if(isset($_SESSION['resultinsert']) && $_SESSION['resultinsert']!=true)
    {
      echo '<div class="alert alert-danger" role="alert">
            Your record inserted unsuccessfully
            </div>';
      
    }
    else
    {
       if($_POST['name']!='')
      {
      echo '<div class="alert alert-success" role="alert">
            Your record was inserted success
            </div>';
      }
    }
  }
   // $isvalidate=true;
    ?>
    <div class="container">
      <h4 class="container text-center text-primary">PHP OOPS Form</h4>
      <form method="POST" action="" id="mycrudoop">
        <!-- action="selectoopcrud.php" -->
      <div class="mb-3">
        <label for="name" class="form-label">Username
           <span class="error">*
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST")
        { 
        
        $name  = $_POST['name'];
        // $_SESSION['username']=$name;
        $valid = new validname();
        if($name=="")
        {
          echo "please enter name";
        }
        else
        {
          $namev=$valid->checkname($name);
          if(!$namev)//as invalid so isvalidate->false 
          {
            $isvalidate=false;
          }
          // else
          // {
          //   $isvalidate=true;
          // }  
        }

       }
         ?></span>
        </label>
        <input type="text" class="form-control" id="name" name="name"/>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address<span class="error">*
          
        <?php
         
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
          $emailv=$valid->checkemail($email);
          if(!$emailv)//as invalid so isvalidate->false 
          {
            $isvalidate=false;
          }
          // else
          // {
          //   $isvalidate=true;
          // }
        }
       }
         ?></span></label>
        <input type="email" class="form-control" id="email" name="email">
        
      </div>
      <div class="mb-3">
        <label for="mobile" class="form-label">
          Mobile
          <span class="error">*
        <?php
         
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
          if(!$mobilev)//as invalid so isvalidate->false 
          {
            $isvalidate=false;
          }
          // else
          // {
          //   $isvalidate=true;
          // }
        }
       }
         ?></span>
        </label>
        <input type="phone" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}">
         
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>

    <div class="container">
       <h4 class="text-info my-2 text-center">Records</h4>
    <?php 
      $obj = new query();
      $obj->getData();   
    ?>
    </div>
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
<?php
 //insert data
if($_SERVER['REQUEST_METHOD']=="POST")
{
  // $isvalidate==true
if($_POST['name']!='' && preg_match("/^([a-zA-Z' ]+)$/",$name) && preg_match("/^[0-9]{10}$/",$mobile) || $isvalidate==true)
{
  $obj->insertData('emp',$name,$email,$mobile);
}
else
{
  $_SESSION['resultinsert']=false;
}
}
?> 
<!-- && $_POST['email']!='' && $_POST['mobile']!=''  -->