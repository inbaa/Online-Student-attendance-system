<?php session_start();
include("header.php");
include("db.php");
		// to disable back after logged out
      if(!isset($_SESSION['logged_in'])) 
      	echo "<script>window.location.href='index.php';</script>"; 

?>

<div class="container">
	<h2><center><b>Home<b></center> </h2> 
	
<div class="panel panel-default">
	<div class="panel-body">
<!--------------------------------to make schedule if schedule table is empty------------------------------------------->
<?php 
//if schedule is not mae then promt user to make schedule
 $selectresult = mysqli_query($con,"select * FROM schedule ");
    if(mysqli_num_rows($selectresult)<=0)
    {
     
?>
<h3>
<center>
<p> Schedule table is empty. Click below to make schedule</p>
<a href="schedule.php" class="btn btn-primary btn-lg">Make Schedule</a>
</center>
</h3>
<?php
    }
//if schedule is not mae then promt user to make schedule
?>
<!--------------------------------to make schedule if schedule table is empty------------------------------------------->
 <div class="well text-center">
 <center><h3>Welcome <?php echo strtoupper($_SESSION['name']); ?> <br></h3><h4> <?php echo strtoupper($_SESSION['subject']); ?></h4></center>
  <h4>Date: <?php echo date("d-m-Y");  ?></h4>  </div>
<!----------------------------------------------------------------->
<p>Click on your subject to take attendance</p><br><bt>

<table class="table table-stripped">
 	<tr>
 	<th>WEEK</th> <th>PERIOD 1</th> <th>PERIOD 2</th> <th>PERIOD 3</th><th>PERIOD 4</th> <th>PERIOD 5</th> <th>PERIOD 6</th>
 	</tr>	
	<?php
	//weekname for getting todays schedule
	$weekname= date('l', strtotime(date("d-m-Y")));


 	$result=mysqli_query($con,"select * from schedule where week= '$weekname' ;");
	$row=mysqli_fetch_array($result)	
	?>
	
<tr>
	<th><?php echo $row['week']; ?> </th>

 	<td >
 <!-----------if is for disabling the button if not their period else part is for storing period to enter in attendance table----------->
 	  
	  <form method="POST" action="take_attendance.php">
	  <input type="hidden" name="period" value="1">	
 	  <input type="submit" value="<?php echo $row['period1']; ?>" 
 	  <?php if ($row['period1'] != $_SESSION['subject']) echo "Disabled";  ?>   />
 	  </form>	
 	</td>
 	<td>
 		<form method="POST" action="take_attendance.php">
 		<input type="hidden" name="period" value="2">
 	  <input type="submit" value="<?php echo $row['period2']; ?>" 
 	  <?php if ($row['period2'] != $_SESSION['subject']) echo "Disabled";  ?> />  
 	</form>
 	</td>
 	<td>
 		<form method="POST" action="take_attendance.php">
	  <input type="hidden" name="period" value="3">
 	  <input type="submit" value="<?php echo $row['period3']; ?>" 
 	  <?php if ($row['period3'] != $_SESSION['subject']) echo "Disabled";  ?> />  
 	</form>
 	</td>
 	<td>
 		<form method="POST" action="take_attendance.php">
	  <input type="hidden" name="period" value="4">
 	  <input type="submit" value="<?php echo $row['period4']; ?>" 
 	  <?php if ($row['period4'] != $_SESSION['subject']) echo "Disabled";  ?> />  
 	</form>
 	</td>
 	<td>
 		<form method="POST" action="take_attendance.php">
	  <input type="hidden" name="period" value="5">
 	  <input type="submit" value="<?php echo $row['period5']; ?>" 
 	  <?php if ($row['period5'] != $_SESSION['subject']) echo "Disabled";  ?> />  
 		</form>
 	</td>
 	<td>
 		<form method="POST" action="take_attendance.php">
	  <input type="hidden" name="period" value="6">
 	  <input type="submit" value="<?php echo $row['period6']; ?>" 
 	  <?php if ($row['period6'] != $_SESSION['subject']) echo "Disabled";  ?> />  
 		</form>
 	</td>

 </tr>

</table>

	</div>

</div>
</div>
<!--container-->
</div>
