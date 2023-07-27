<!DOCTYPE html>
<html>
<head>
	<title>UPDATE STUDENT</title>
	<link rel="stylesheet" type="text/css"> 
</head>
<body>
<?php 
	 $con = mysqli_connect("localhost","root","","student");
     $id= $_GET['data'];
     $query = "SELECT * FROM studentinfo where ID=$id";
     $result = mysqli_query($con,$query);
     if (mysqli_num_rows($result) > 0) {
     	while($row = mysqli_fetch_assoc($result))
     	{
?>
<form action="updateStudentData.php" method="post">
<table>
	<tr>
	<td>
	<label><span style="color: red">*</span>First Name</label>
	</td>
	<td>:</td>
	<td>
		<input type="hidden" name="sid" value="<?php echo $row['ID']; ?>"/>
		<input type="text" name="fname" value="<?php echo $row['firstname']; ?>"/><br/></td>
</tr>
<tr>
	<td>
	<label><span style="color: red">*</span>Last Name</label>
	</td>
	<td>:</td>
	<td>
	<input type="text" name="lname" value="<?php echo $row['lastname']; ?>" /><br/>
	</td>
</tr>
<tr>
	<td>
	<label>Address</label>
	</td>
	<td>:</td>
	<td>
		<textarea name="address" /><?php echo $row['address']; ?></textarea><br/>
	</td>
</tr>
<tr>
	<td>
	<label for="">STD</label>
	</td>
	<td>:</td>
	<td>
  		<select name="std" id="id" class="form-group">
	    <option value="1">1</option>
	    <option value="2">2</option>
	    <option value="3">3</option>
	    <option value="4">4</option>
	    <option value="5">5</option>
	    <option value="6">6</option>
	    <option value="7">7</option>
	    <option value="8">8</option>
  	</select><br/>
  </td>
</tr>
	<!-- <?php 
	/*echo "<td>";
	 $queryselect = "SELECT * FROM studentinfo";
     $resultselect = mysqli_query($con,$queryselect);
     if (mysqli_num_rows($resultselect) > 0) 
     {
     		echo '<select name="std">';
     	while($rowselect = mysqli_fetch_assoc($resultselect))
     	{
     		if(!$row['ID'])
     		{
     			$select = "selected";
     		}
     		else
     		{
     			$select = "not selected";
     		}
     		echo "<option {$select} value='{$rowselect['std']}'>{$rowselect['std']}</option>";
     	}
  	echo "</select>";
  	}
 echo "</td>";
 echo "</tr>"; */
 ?> --> 
 <tr>
 	<td>
	<label>Birthdate</label>
	</td>
	<td>:</td>
	<td>
	<input type="date" name="birthdate" value="<?php echo $row['birthdate']; ?>"/><br/>
	</td>
</tr>
<tr>
	<td>
	<label><span style="color: red">*</span>Mobile</label>
	</td>
	<td>:</td>
	<td>
	<input type="number" name="mobile" value="<?php echo $row['mobilenumber']; ?>"/>
	</td>
</tr>
</table>
<input type="submit" name="submit" value="UPDATE" />
</form>
<?php 
//echo "<a href='updateStudentData.php?data=$row[ID]'>Update student</a>";
}
}
?>

</body>
</html>