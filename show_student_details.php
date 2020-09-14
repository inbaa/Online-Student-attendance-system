<?php session_start();
include("db.php");
include("header.php");
		// to disable back after logged out
      if(!isset($_SESSION['logged_in'])) 
      		echo "<script>window.location.href='index.php';</script>";	

?>	
<div class="container">
	<h2><center><b>Student Details<b><br>	<h4>Date: <?php echo date("d-m-Y"); ?></h4></center> </h2> 
	

<div class="panel panel-default">

	
 	<div class="panel panel-body">

 	<table class="table table-stripped">
 	<tr>
 	<th>Serial Number</th> <th>Admission Number</th> <th>Name</th>
 	</tr>

 	<!-- to display values in table using loop -->
 	<?php $result=mysqli_query($con,"select admno,name from student");
 	// below variable for displaying serial number
 	$serialnumber=0;
 	while($row=mysqli_fetch_array($result))
 	{
 		$serialnumber++;

	?>
	
<tr>
 	<td><?php echo $serialnumber; ?> </td>
 	<td><?php echo $row['admno']; ?>  </td>
 	<td><?php echo $row['name']; ?>  </td>

 	<td>
 		<form action="show_attendance.php" method="POST">
 			<!-- date value is passed to show_attendace file through $_POST[date]  -->
 			<input type="hidden" value="<?php echo $row['name']; ?>" name="name">
 			<input type="hidden" value="<?php echo $row['admno']; ?>" name="admno">
 			<input type="submit" value="Show Attendance" class="btn btn-primary">

 		</form>	
 	</td>	

 </tr>
 	<!-- loop ends -->
 	<?php

	}
 	?>

 	</table>

 	</div>

	</div>



</div>	