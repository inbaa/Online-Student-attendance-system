<?php
include("db.php");
include("header.php");
	$date=date("d-m-Y");
?>


<div class="container">

	<h2><center><b>Show Attendance<b><br><h4>Date: <?php echo $date; ?></h4></center> </h2> 
	

<div class="panel panel-default">



 	<div class="panel panel-body">


 	<!-- to display values in table using loop -->
 	<?php $result=mysqli_query($con,"select * from attendance where date='$date' and admno='$_POST[admno]' ");
	//check f attendance available for today
	if(mysqli_num_rows($result)<=0)
    	{
    		?>
	<h3>
	<center>
	<p> No Attendance taken today.</p>
	<a href="home.php" class="btn btn-primary btn-lg">Take Attendance</a>
	</center>
	</h3>
	<?php
    	} 
//if schedule is not mae then promt user to make schedule
	else
{
//table heading
	?>
	<table class="table table-stripped">
 	<tr>
 	 <th>Student Name</th><th>Period 1</th> <th>Period 2</th> <th>Period 3</th><th>Period 4</th> <th>Period 5</th> <th>Period 6</th>
 	</tr>

<?php
 	while($row=mysqli_fetch_array($result))
 	{

	?>
	
	<tr>
 	<td><?php echo $row['name']; ?>   
 		</td>
 	<td><?php  if($row['period']=="1") echo $row['status']; else echo "NA";  ?> 
 		</td>
 	<td><?php  if($row['period']=="2") echo $row['status']; else echo "NA";  ?> 
 		</td>
 	<td><?php  if($row['period']=="3") echo $row['status']; else echo "NA";  ?> 
 		</td>
 	<td><?php  if($row['period']=="4") echo $row['status']; else echo "NA";  ?> 
 		</td>
 	<td><?php  if($row['period']=="5") echo $row['status']; else echo "NA";  ?> 
 		</td>
 	<td><?php  if($row['period']=="6") echo $row['status']; else echo "NA";  ?> 
 		</td>

 	</tr>
 	<!-- loop ends -->
 	<?php
	}
}	
 	?>

 	</table>


 	</div>

	</div>




</div>	