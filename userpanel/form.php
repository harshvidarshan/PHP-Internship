<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome to User Page</title>
    <link rel="stylesheet" type="text/css" href="partialss/formstyle.css">
    <style type="text/css">
      .error
      {
        color: red;
      }
    </style>
  </head>
  <body>
<div class="container">
  <header class="header">
    <h1 id="title" class="text-center">GunjanDhara Associates</h1>
  </header>
  <?php 
   $username=$phone=$fs="";
   $usererror=$phoneerror=$fserror="";
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      // username valid or not
      if(empty($_POST['username']))
      {
        $usererror="Please enter username";
      }
      else
      {
        $name = testinput($_POST['username']);
        if(!preg_match("/^([a-zA-Z' ]+)$/",$name))
        {
          $usererror="Only letters and whitespaces are allowed";
        }
      }

      // mobileno is valid or not
      if(empty($_POST['phone']))
      {
         $phoneerror="Please enter your Mobile Number";
      }
      else
      {
        $mobileno=testinput($_POST['phone']);
        if(!preg_match("/^([0-9]{10}+)$/",$mobileno))
        {
          $phoneerror="Only 10 digits are allowed";
        }
      }

      function testinput($data)
      {
            $data  = trim($data);
            $data  = stripslashes($data);
            $data  = htmlspecialchars($data);
            return $data;
      }
    }
  ?>
  <div class="form-wrap"> 
    <form id="survey-form" action="insertdata.php" method="POST">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label id="name-label" for="username">Name</label>
            <input type="text" name="username" id="username" placeholder="Enter your name" class="form-control">
            <span class="error">*<?php echo $usererror;?></span>
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
      <div class="col-md-12">
          <label for="phone" class="form-label">Mobile No</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your Mobile Number">
        <span class="error">*<?php echo $phoneerror;?></span>
      </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-md-12">
        <fieldset>
        
          <label for="flat" class="form-label">Choose any one</label>
        <div>
          <!-- <a href="flat.php"> --><input type="radio" id="flat" name="fs" value="flat">
          <label for="flat">Flat</label><!-- </a> -->
        </div>

        <div>
          <!-- <a href="shop.php"> --><input type="radio" id="shop" name="fs" value="shop">
          <label for="shop">Shop</label><!-- </a> -->
        </div>

        </fieldset>
      </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-md-4">
          <button type="submit" id="submit" class="btn btn-primary btn-block">Next</button>
        </div>
      </div>

    </form>
  </div>  
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
