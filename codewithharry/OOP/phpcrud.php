<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <?php 
    // include ('formvalidation.php');
    // include ('phpoopsform.php'); 
    session_start();
    ?>
    
  </head>
  <body>
 	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

</script>
  </body>
</html>
<?php 
class database
{
	private $localhost;
	private $database;
	private $password;
	private $root;

	protected function connection()
	{
		$this->localhost="localhost";
		$this->root ="root";
		$this->password="";
		$this->database="harshvi";
		$con = new mysqli($this->localhost,$this->root,$this->password,$this->database);
		return $con;
	}

}
// WHERE 'name' NOT like '[0,1,2,3,4,5,6,7,8,9]'
class query extends database
{
	public function getData()
	{
	$select = "SELECT * FROM `emp`";
	$result = $this->connection()->query($select);
	
	echo '<table class="table" id="myTable">
		<thead>
		<tr>
		<th>Sno.</th>
	    <th>Name</th>
        <th>Email</th>
	    <th>Mobile</th>
		<th>Actions</th>
		</tr>
		</thead>';
	if($result->num_rows>0)	
	{
		$sno=1;
		while($row = $result->fetch_assoc())
		{
			echo '<tbody>
				  <tr>
				  <th>'.$sno.'</th>
 			      <td>'.$row['name'].'</td>
				  <td>'.$row['email'].'</td>
	 			  <td>'.$row['mobile'].'</td>
				  <td><a href="editoopcrud.php?id='.$row['sno'].'" class="btn btn-primary">Edit</a>&nbsp;<a href="deleteoopcrud.php?id='.$row['sno'].'" class="btn btn-danger">Delete</a></td>
				  </tr>
				  </tbody>';
		   $sno++;
		}
	}
	echo '</table>';
	}

	public function insertData($table,$name,$email,$mobile)
	{
		$insert ="INSERT INTO `$table` (`name`, `email`, `mobile`) VALUES ('$name', '$email', '$mobile')";

		//print_r($insert);
		$resultinsert = $this->connection()->query($insert);
		$_SESSION['resultinsert']=$resultinsert;
		$_SESSION['resultinsert']=true;
		// if($resultinsert)
		// {
		// 	echo '<div class="alert alert-success" role="alert">
		// 		  Your record inserted successfully
		// 		  </div>';
		// }
		// else
		// {
		// 	echo '<div class="alert alert-danger" role="alert">
		// 		  Your record was unsuccessful to insert
		// 		  </div>';
		// }
		// }
	}

	public function deleteData()
	{
		$sno=$_GET['id'];
	 	$delete = "DELETE FROM `emp` WHERE `sno` = $sno ";
	 	$result=$this->connection()->query($delete);
		
	 	if($result)
	 	{
	 		echo '<div class="alert alert-success" role="alert">
				  Your record deleted successfully <a href="phpoopsform.php">Please click here</a>
				  </div>';
	 		
	 	}
	 	else
	 	{
	 		echo '<div class="alert alert-danger" role="alert">
				  Your record has not been found <a href="phpoopsform.php">Please click here</a>
				  </div>';
	 	}
	}

	public function updateData($name,$email,$mobile)
	{
			$sno=$_GET['id'];
			$update = "UPDATE `emp` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE sno=$sno";
			$resultupdate=$this->connection()->query($update);
			//print_r($update);
			if($resultupdate)
			{
				echo '<div class="alert alert-success" role="alert">
				  Your record updated successfully <a href="phpoopsform.php">Please click here</a>
				  </div>';
			}
			else
			{
				echo '<div class="alert alert-danger" role="alert">
				  Your record didn\'t updated successfully <a href="phpoopsform.php">Please click here</a>
				  </div>';
			}
	}

	// public function getdataID()
	// {
	// $sno=$_GET['id'];
	// $select = "SELECT * FROM emp WHERE sno = $sno";
	// $result = $this->connection()->query($select);
	// if($result->num_rows>0)
	// {
	// 	$row = $result->fetch_assoc()
	// 	{
	// 		//echo $row['name'];
	// 	}	
	// }
	// }

}

?>