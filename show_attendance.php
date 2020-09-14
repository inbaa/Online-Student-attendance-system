<?php session_start();
include("db.php");
include("header.php");
	
if(!isset($_SESSION['logged_in'])) 
     echo "<script>window.location.href='index.php';</script>"; 

	$date=date("d-m-Y");

?>


<div class="container">

	<h2><center><b>Show Attendance<b><br><h4>Date: <?php echo $date; ?></h4></center> </h2> 
	

<div class="panel panel-default">



 	<div class="panel panel-body">


 	<!-- to display values in table using loop -->
 	<?php $result=mysqli_query($con,"select * from attendance where  admno='$_POST[admno]' and subject='$_SESSION[subject]' ");
	//check f attendance available for today
	if(mysqli_num_rows($result)<=0)
    	{
    		?>
	<h3>
	<center>
	<p> No Attendance available.</p>
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
	<h2><?php echo strtoupper($_POST['name']); ?></h2>
	<table class="table table-stripped">
 	<tr>
 	 <th>Date</th><th>Period</th><th>Status</th> 
 	</tr>

<?php
 	while($row=mysqli_fetch_array($result))
 	{

	?>
	
	<tr>
	<td><?php echo $row['date']; ?> 
 		</td>
 	<td><?php echo $row['period']; ?> 
 		</td>
 	<td><?php echo $row['status']; ?> 
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