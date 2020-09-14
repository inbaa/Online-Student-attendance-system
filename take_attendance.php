<?php
session_start();
		// to disable back after logged out
     	if(!isset($_SESSION['logged_in'])) 
      		echo "<script>window.location.href='index.php';</script>";  

include("db.php");
include("header.php");

	if(isset($_POST['submit']))
	{

			$date=date("d-m-Y");
			$subject=$_SESSION["subject"];
			$period=$_SESSION["period"];

	///check if already attendance marked for this period on this day.	
			$check=mysqli_query($con,"Select * from attendance where date='$date' and period='$period'; ");
		if(mysqli_num_rows($check)>0)
    	{
        	echo "<script>
			alert('Attendance marked for this period!');
			window.location.href='home.php';
			</script>";
    	}		
		else
		{		
			foreach($_POST['attendance_status'] as $id=>$attendance_status)
			{
				$name=$_POST['student_name'][$id];
				$admno=$_POST['admno'][$id];

				$resul=mysqli_query($con,"insert into attendance(admno,name,subject,status,period,date) values('$admno','$name','$subject',
					'$attendance_status','$period','$date'); ");
			}
				if($resul)
					{
					unset($_SESSION["period"]);
					echo "<script>
					alert('Data saved successfully.');
					window.location.href='home.php';
					</script>";
					}
		}	
	}

?>

<div class="container">
	<h2><center><b>Attendance<b></center> </h2> 

<div class="panel panel-default">

	
 	<div class="well text-center"> 
			<?php	$_SESSION["period"]=$_POST["period"]; ?>		
 	 <center><h3>Welcome <?php echo strtoupper($_SESSION['name']); ?> <br></h3><h4> 
 	 	<?php echo strtoupper($_SESSION['subject']);?> &nbsp;Period&nbsp; <?php echo $_SESSION["period"]; ?></h4>
 	 </center>
	
 		<h4>Date: <?php echo date("d-m-Y"); ?></h4>
 	</div>

 	<div class="panel panel-body">

 	<form action="" method="post">

 	<table class="table table-stripped">
 	<tr>
 	<th>Serial Number</th> <th>Student Name</th> <th>Roll Number</th> <th>Attendance Status</th>
 	</tr>
 	<!-- to display values in table using loop -->
 	<?php $result=mysqli_query($con,"select * from student");
 	// below variable for displaying serial number
 	$serialnumber=0;
 	//  below variable for radio button
 	$counter=0;
 	while($row=mysqli_fetch_array($result))
 	{
 		$serialnumber++;

	?>
	
	<tr>
 	<td><?php echo $serialnumber; ?> </td>
 	<td><?php echo $row['name']; ?>
 	<input type="hidden" value="<?php echo $row['name']; ?>" name="student_name[]">
 		</td>
 	<td><?php echo $row['admno']; ?> 
 	<input type="hidden" value="<?php echo $row['admno']; ?>" name="admno[]">
 		</td>
 	<td> 
 		<!-- attendance_status[0], [1], [2] etc save as array which is used in php above to store in db-->
 		<input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Present" required>Present &nbsp;
 		<input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Absent" required>Absent
 	</td>
 	</tr>
 	<!-- loop ends -->
 	<?php
 	//increment counter variable for radio button 
 	$counter++;
	}
 	?>

 	</table>
<center>
 	<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg">
</center>

 	</form>

 	</div>

	</div>




</div>	