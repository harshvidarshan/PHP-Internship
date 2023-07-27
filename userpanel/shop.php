<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome to Shops.com</title>
    <link rel="stylesheet" type="text/css" href="partialss/formstyle.css">
    </head>
  <body>
  <h3 class="text-center">Enter Shop details</h3>
       <div class="container">
  <header class="header">
    <h1 id="title" class="text-center">GunjanDhara Associates</h1>
  </header>
  <div class="form-wrap my-3"> 
    <form id="survey-form" action="" method="POST">
      <div class="row">
        <div class="col-md-12">
              <fieldset>
		    <label class="form-label text-center">Select type of shop</label>

		    <div>
		      <input type="radio" id="shop1" name="shoptype" value="Hardware Store">
		      <label for="shop1">Hardware Store</label>
		    </div>

		     <div>
		      <input type="radio" id="shop2" name="shoptype" value="Co-orpate Shop">
		      <label for="shop2">Co-orpate Shop</label>
		    </div>

		    <div>
		      <input type="radio" id="shop3" name="shoptype" value="SuperMarket">
		      <label for="shop3">SuperMarket</label>
		    </div>

		    <div>
		      <input type="radio" id="shop4" name="shoptype" value="Gift Shop">
		      <label for="shop4">Gift Shop</label>
		    </div>

		    <div>
		      <input type="radio" id="shop4" name="shoptype" value="Grocery Shop">
		      <label for="shop4">Grocery Shop</label>
		    </div>

		    </fieldset>
        </div>
      </div>
      <hr/>
      <div class="row">
      <div class="col-md-12">
         <label for="carpetarea" class="form-label">Select Carpet Area</label>
        <input class="form-control" list="datalistOptions" id="carpetarea" placeholder="Type to search..." name="carpetarea">
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
         <label for="visitdate" class="form-label">Visit Date</label>
		<input type="date" class="form-control" name="visitdate" id="visitdate">
        </div>
      </div>
       <hr/>
       <div class="row">
        <div class="col-md-12">
        <fieldset>
	   <label for="visittype" class="form-label">Visit Type</label>
	    <div>
	      <input type="radio" id="visit1" name="visittype" value="Data Gathering">
	      <label for="visit1">Data Gathering</label>
	    </div>

	     <div>
	      <input type="radio" id="visit2" name="visittype" value="Merchandising">
	      <label for="visit2">Merchandising</label>
	    </div>

	    <div>
	      <input type="radio" id="visit3" name="visittype" value="Growth-Based">
	      <label for="visit3">Growth-Based</label>
	    </div>

	    </fieldset>
        </div>
      </div>
       <hr/>
      <div class="row">
        <div class="col-md-4">
          <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
      </div>
      <!--  <hr/> -->
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
  $shoptype = $_POST['shoptype'];
  $carpetarea = $_POST['carpetarea'];
  $floor = $_POST['floor'];
  $visitdate = $_POST['visitdate'];
  $visittype = $_POST['visittype'];
  $profession = $_POST['profession'];
  $insert = "INSERT INTO `shop` (`shop_type`, `shop_carpetarea`, `shop_floor`, `shop_visitdate`, `shop_visittype`, `profession`, `created`) VALUES ('$shoptype', '$carpetarea', '$floor', '2$visitdate', '$visittype', '$profession', current_timestamp())";
  $result = mysqli_query($con,$insert);
}
?>