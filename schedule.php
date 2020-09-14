<?php session_start();
include("header.php");
include("db.php");
		// to disable back after logged out
      if(!isset($_SESSION['logged_in'])) 
      		echo "<script>window.location.href='index.php';</script>";  

if(isset($_POST['submit']))
	{		
	// delete all
	mysqli_query($con,"delete from schedule;");	
    //insert
	$sql = "insert into schedule (week,period1,period2,period3,period4,period5,period6) 
	values ('Monday','$_POST[11]','$_POST[12]','$_POST[13]','$_POST[14]','$_POST[15]','$_POST[16]'); ";
	$sql .= "insert into schedule (week,period1,period2,period3,period4,period5,period6) 
	values ('Tuesday','$_POST[21]','$_POST[22]','$_POST[23]','$_POST[24]','$_POST[25]','$_POST[26]'); ";
	$sql .= "insert into schedule (week,period1,period2,period3,period4,period5,period6) 
	values ('Wednesday','$_POST[31]','$_POST[32]','$_POST[33]','$_POST[34]','$_POST[35]','$_POST[36]'); ";
	$sql .= "insert into schedule (week,period1,period2,period3,period4,period5,period6) 
	values ('Thursday','$_POST[41]','$_POST[42]','$_POST[43]','$_POST[44]','$_POST[45]','$_POST[46]'); ";
	$sql .= "insert into schedule (week,period1,period2,period3,period4,period5,period6) 
	values ('Friday','$_POST[51]','$_POST[52]','$_POST[53]','$_POST[54]','$_POST[55]','$_POST[56]'); ";

    $result=mysqli_multi_query($con,$sql); 
		if($result)
		{
		echo "<script>
		alert('Data saved successfully.');
		window.location.href='home.php';
		</script>";
	
		}
		else {
 		 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

}		


?>
<head>
<style>
th{
	align:"center";
}

</style>
</head>
<body>
<div class="container">
	<h2><center><b>Make Schedule</b></center> </h2> 
<div class="panel panel-default">
	<div class="panel-body">

<?php
//load options in optiondata for dropdown
	$optionData = '<option id = "0">-- Select Subject -- </option>';
 	
 	$result=mysqli_query($con,"select subject from faculty ");
 	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
  	while($row = mysqli_fetch_assoc($result)) {
 	 $optionData .= "<option>".$row["subject"]."</option>" ;
 	}
 }
?>
<form action="" method="POST">	
 	<table class="table table-stripped">
 	
 	<tr>
<th>Week</th> <th>Period 1</th> <th>Period 2</th> <th>Period 3</th><th>Period 4</th> <th>Period 5</th> <th>Period 6</th>
 	</tr>
	<!----------------------------------------------------------->
	<tr>
 	<td>Monday</td>
 	
 	<td>
 		<select name="11" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>
 	
 	<td>
 		<select name="12" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="13" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="14" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="15" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="16" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>
	
 	 </tr>
	<!----------------------------------------------------------->
	<tr>
 	<td>Tuesday</td>
 	
 	<td>
 		<select name="21" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>
 	
 	<td>
 		<select name="22" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="23" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="24" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="25" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="26" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>
	
 	 </tr>
	<!----------------------------------------------------------->
	<tr>
 	<td>Wednesday</td>
 	
 	<td>
 		<select name="31" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>
 	
 	<td>
 		<select name="32" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="33" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="34" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="35" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="36" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>
	
 	 </tr>
	<!----------------------------------------------------------->
	<tr>
 	<td>Thursday</td>
 	
 	<td>
 		<select name="41" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>
 	
 	<td>
 		<select name="42" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="43" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="44" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="45" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="46" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>
	
 	 </tr>
	<!----------------------------------------------------------->
	<tr>
 	<td>Friday</td>
 	
 	<td>
 		<select name="51" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>
 	
 	<td>
 		<select name="52" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="53" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="54" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="55" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>

 	<td>
 		<select name="56" class="textfields"  required>
    	<?php echo $optionData;?>
		</select>
 	</td>
	
 	 </tr>
 		
 	
 	</table>
<center>
<input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg">
</center>
	</form>	

</div>
	</div>

<!--container-->
</div>
</body>