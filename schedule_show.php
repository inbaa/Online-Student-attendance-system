<?php session_start();
include("db.php");
include("header.php");
		// to disable back after logged out
      if(!isset($_SESSION['logged_in'])) 
      		echo "<script>window.location.href='index.php';</script>";
	

?>	
<div class="container">
	<h2><center><b>Schedule<b></center> </h2> 
	

<div class="panel panel-default">

	
 	<div class="panel panel-body">

 	<table class="table table-stripped">
 	<tr>
 	<th>Week</th> <th>Period 1</th> <th>Period 2</th> <th>Period 3</th><th>Period 4</th> <th>Period 5</th> <th>Period 6</th>
 	</tr>

 	<!-- to display values in table using loop -->
 	<?php $result=mysqli_query($con,"select * from schedule;");

 	while($row=mysqli_fetch_array($result))
 	{

	?>
	
<tr>
	<th><?php echo $row['week']; ?>  </th>
 	<td><?php echo $row['period1']; ?>  </td>
 	<td><?php echo $row['period2']; ?>  </td>
 	<td><?php echo $row['period3']; ?>  </td>
 	<td><?php echo $row['period4']; ?>  </td>
 	<td><?php echo $row['period5']; ?>  </td>
 	<td><?php echo $row['period6']; ?>  </td>

 </tr>
 	<!-- loop ends -->
 	<?php

	}
 	?>

 	</table>
<!----  Update schedule  ----->
 	<form action="schedule.php" method="POST">
 
  		<center>	<input type="submit" value="Update Schedule" class="btn btn-primary btn-lg"> </center>

 		</form>	
 	</div>
			
	</div>

</div>
