<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome to Flats.com</title>
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
      $flaterror=$carpeterror=$floorerror=$wingerror="";
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      // flattype valid or not
      // if($_POST['flattype'] == -1)
      // {
      //   $flaterror="Please Select one choice";
      // }
      // // carpetarea valid or not
      // if($_POST['carpetarea']== -1)
      // {
      //   $carpeterror="Please Select one choice";
      // }
      // //floor valid or not
      // if($_POST['floor']== -1)
      // {
      //   $floorerror="Please Select one choice";
      // }
      // //wing valid or not
      // if($_POST['wing']==-1)
      // {
      //   $wingerror="Please Select one choice";
      // }
    }
  ?>
  <div class="form-wrap"> 
    <form id="survey-form" action="" method="POST">
      <div class="row">
        <div class="col-md-12">
          <fieldset>
          <legend class="form-label">Select any one type of BHK:</legend>
          <span class="error"><?php echo $flaterror;?></span>
          <div>
            <input type="radio" id="flat1" name="flattype" value="1">
            <label for="flat1">1</label>
          </div>

           <div>
            <input type="radio" id="flat2" name="flattype" value="2">
            <label for="flat2">2</label>
          </div>

          <div>
            <input type="radio" id="flat3" name="flattype" value="3">
            <label for="flat3">3</label>
          </div>

          <div>
            <input type="radio" id="flat4" name="flattype" value="4">
            <label for="flat4">4</label>
          </div>

          </fieldset>
        </div>
      </div>
      <hr/>
      <div class="row">
      <div class="col-md-12">
         <label for="carpetarea" class="form-label">Select Carpet Area</label>
        <input class="form-control" list="datalistOptions" id="carpetarea" placeholder="Type to search..." name="carpetarea">
        <span class="error"><?php echo $carpeterror;?></span>
        <datalist id="datalistOptions">
          <option value="510sq.ft">
          <option value="600sq.ft">
          <option value="750sq.ft">
          <option value="900sq.ft">
          <option value="1020sq.ft">
          <option value="1050sq.ft">
        </datalist>
      </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-md-12">
        <label for="floor" class="form-label">Select Floor</label>
        <input class="form-control" list="floorlistOptions" id="floor" placeholder="Type to search..." name="floor">
        <span class="error"><?php echo $floorerror;?></span>
        <datalist id="floorlistOptions">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
          <option value="6">
          <option value="7">
        </datalist>
      </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-md-12">
          <label for="wing" class="form-label">Select Wing</label>
          <input class="form-control" list="winglistOptions" id="wing" placeholder="Type to search..." name="wing">
          <span class="error"><?php echo $wingerror;?></span>
          <datalist id="winglistOptions">
            <option value="A1">
            <option value="A2">
            <option value="B1">
            <option value="B2">
            <option value="C1">
          </datalist>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-md-4">
          <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
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
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include 'partialss/dbconnect.php';
  $flattype = $_POST['flattype'] ;
  $carpetarea = $_POST['carpetarea'];
  $floor = $_POST['floor'];
  $wing = $_POST['wing'];
  $insert = "INSERT INTO `flat` (`userlogid`, `flat_bhk`, `flat_carpet`, `flat_floor`, `flat_wing`, `created`) VALUES ('1', '$flattype', '$carpetarea', '$floor', '$wing', current_timestamp())";
  $result = mysqli_query($con,$insert);
  // header("Location:http://localhost/training2/userpanel/form.php");
}
?>