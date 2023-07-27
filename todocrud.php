
<!doctype html>
<?php
	$con =  mysqli_connect("localhost","root","","harshvi");

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>TO DO List</title>
  </head>
  <body>

	  	<!-- Button trigger modal -->
		<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
		EditModal
		</button> -->

	<!-- Modal -->
	<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="editModalLabel" >Edit Notes</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	       <form method = "POST" class="mb-4">
	       		<input type="hidden" name="snoEdit" id="snoEdit"/>
			  <div class="mb-3">
			    <label for="title" class="form-label">Title</label>
			    <input type="text" class="form-control" id="titleEdit" name="titleEdit">
			  </div>
			 <div class="mb-3">
			  <label for="desc" class="form-label">Description</label>
			  <textarea class="form-control" id="descriptionEdit" rows="3" name="descriptionEdit"></textarea>
			</div>
			  <button type="submit" class="btn btn-primary">Update notes</button>
		   </form>
	      </div>
	    </div>
	  </div>
	</div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <div class="container-fluid">
  	<img src="/training/codewithharry/logo.png" height="28px;" />
    <a class="navbar-brand" href="#">TO DO LIST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
	if(isset($_GET['delete']))
	{
		$sno = $_GET['delete'];
		$deletedata = "DELETE FROM notes WHERE sno=$sno";
		$resultdelete = mysqli_query($con,$deletedata);
		if($resultdelete)
		{
		echo "<div class='alert alert-success d-flex align-items-center' role='alert'>
		  <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
		  <div>
		   Your record is deleted successfully:)
		  </div>
		</div>";
		}
	}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
if(isset($_POST['snoEdit']))
{
	//UPDATE DATA
	$usno=$_POST["snoEdit"];
	$title = $_POST["titleEdit"];
	$description = $_POST["descriptionEdit"];
	$updatedata = "UPDATE `notes` SET `title` = '$title', `description` = '$description' WHERE `notes`.`sno` = $usno";
	$resultupdate = mysqli_query($con,$updatedata);
	if($resultupdate)
	{
		echo "<div class='alert alert-success d-flex align-items-center' role='alert'>
		  <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
		  <div>
		   Your record is updated successfully:)
		  </div>
		</div>";
	}
	else
	{
		echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
		  <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
		  <div>
		   Your record is not updated successfully:(
		  </div>
		</div>";
	}
}
else
{
	//INSERT DATA
$title = $_POST['title'];
$description = $_POST['description'];

if($title != "")
{
$insertdata = "INSERT INTO `notes` ( `title`, `description`) VALUES ('$title', '$description')"; 
$resultinsert = mysqli_query($con,$insertdata);
if($resultinsert)
{
	echo "<div class='alert alert-success d-flex align-items-center' role='alert'>
		  <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
		  <div>
		   Your record is inserted successfully:)
		  </div>
		</div>";
}
}
}
}
?>
<div class="container">
<form method = "POST" class="mb-4" >
  <div class="mb-3">
    <label for="exampleInputtitle1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputtitle1" name="title">
  </div>
 <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="container">
	<table class="table table-striped" id="myTable" style="margin-top: 10px;">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   	<?php 
   		$display = "SELECT * FROM notes";
   		$result = mysqli_query($con,$display);
   			$sno=1;
   			while($rows = mysqli_fetch_assoc($result))
   			{
   				echo "<tr>
   				      <th scope='row'>".$sno."</th>
   				      <td>".$rows['title']."</td>
					  <td>".$rows['description']."</td>
					  <td>
					  <button type='button' class='edit btn btn-primary' id=".$rows['sno'].">Edit</button>&nbsp;
					  <button type='button' class='delete btn btn-danger' id=d".$rows['sno'].">Delete</button>
					  </td>
					  </tr>";
				$sno=$sno+1;
   		}
   	?>
  </tbody>
</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
      <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
    	$(document).ready(function () {
    $('#myTable').DataTable();
});
    </script>
    <script>
    	edits = document.getElementsByClassName('edit');
    	Array.from(edits).forEach((element) => {
    		element.addEventListener("click",(e)=>
    		{
    			console.log("edit ");
		        tr = e.target.parentNode.parentNode;
		        title = tr.getElementsByTagName("td")[0].innerText;
		        description = tr.getElementsByTagName("td")[1].innerText;
		        console.log(title, description);
		        titleEdit.value = title;
		        descriptionEdit.value = description;
		        snoEdit.value = e.target.id;
		        console.log(e.target.id);
		        $('#editModal').modal('toggle');
    		})
    	})

    		deletes = document.getElementsByClassName('delete');
    	Array.from(deletes).forEach((element) => {
    		element.addEventListener("click",(e)=>
    		{
    			console.log("delete ");
    			sno = e.target.id.substr(1,);
		        if(confirm('Are you sure to delete record?'))
		        {
		        	console.log("yes");
		        	window.location=`http://localhost/training/codewithharry/todocrud.php?delete=${sno}`;
		        }
		        else
		        {
		        	console.log("no");
		        }
		        
    		})
    	})
    </script>
  </body>
</html>