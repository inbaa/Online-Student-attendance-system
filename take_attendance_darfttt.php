<?php
session_start();
		// to disable back after logged out
     	if(!isset($_SESSION['logged_in'])) 
      		echo "<script>window.location.href='index.php';</script>";  

include("db.php");
include("header.php");
	$flag=0;
	$update=0;
	if(isset($_POST['submit']))
	{
		$date=date("Y-m-d");
	// below line is for update 
		$records=mysqli_query($con,"select * from attendance_records where date='$date' ");
		$num=mysqli_num_rows($records);
		if($num)
		{
			foreach($_POST['attendance_status'] as $id=>$attendance_status)
			{
				$student_name=$_POST['student_name'][$id];
				$roll_number=$_POST['roll_number'][$id];

				$result=mysqli_query($con, "update attendance_records set student_name='$student_name', roll_number='$roll_number', attendance_status='$attendance_status', date='$date' where date='$date' and roll_number='$roll_number' ");
				if($result)
				{
					$update=1;
				}
			}
		}
	// insert records		
		else
		{
		// id holds key and attendance_status holds value
			foreach($_POST['attendance_status'] as $id=>$attendance_status)
			{
				$student_name=$_POST['student_name'][$id];
				$roll_number=$_POST['roll_number'][$id];

				$result=mysqli_query($con,"insert into attendance_records(student_name, roll_number,attendance_status,date) values('$student_name','$roll_number','$attendance_status','$date') ");
				if($result)
				{
					$flag=1;
				}
			}
		}
	}

?>

<!-- Hide successfully added message after 3 seconds -->
<head>
	<script>		
					
			setTimeout(function() {
			  document.getElementById('hide').style.display='none';
			}, 3*1000);
			
		</script>

</head>

<div class="panel panel-default">

	<div class="panel-heading">	
	
<!-- Show success message after adding -->
	<?php if($flag) { ?>

 	<div id='hide'  class="alert alert-success ">
 		Attendance data inserted successfully.	
 	</div>	
 	<?php }?>
<!-- Show success message after updating -->
	<?php if($update) { ?>

 	<div class="alert alert-success">
 		Student Attendance updated successfully.	
 	</div>	
 	<?php }?> 	
 	<div class="well text-center"> <h4>Date: <?php echo date("d-m-Y"); ?></h4></div>

 	<div class="panel panel-body">

 	<form action="index.php" method="post">

 	<table class="table table-stripped">
 	<tr>
 	<th>Serial Number</th> <th>Student Name</th> <th>Roll Number</th> <th>Attendance Status</th>
 	</tr>
 	<!-- to display values in table using loop -->
 	<?php $result=mysqli_query($con,"select * from attendance");
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
 	<td><?php echo $row['student_name']; ?>
 	<input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]">
 		</td>
 	<td><?php echo $row['roll_number']; ?> 
 	<input type="hidden" value="<?php echo $row['roll_number']; ?>" name="roll_number[]">
 		</td>
 	<td> 
 		<!-- attendance_status[0], [1], [2] etc save as array which is used in php above to store in db-->
 		<input type="radio" name="attendance_status[<?php echo $counter; ?>]" 
 		<?php if(isset($_POST['attendance_status'][$counter]) && $_POST['attendance_status'][$counter]=="Present" )
 			echo "checked=checked";
 		?>
 		value="Present" required>Present &nbsp;
 		<input type="radio" name="attendance_status[<?php echo $counter; ?>]" 
 		<?php if(isset($_POST['attendance_status'][$counter]) && $_POST['attendance_status'][$counter]=="Absent" )
 			echo "checked=checked";
 		?>
 		value="Absent" required>Absent
 	</td>
 	</tr>
 	<!-- loop ends -->
 	<?php
 	//increment counter variable for radio button 
 	$counter++;
	}
 	?>

 	</table>

 	<input type="submit" name="submit" value="Submit" class="btn btn-primary">
	 	

 	</form>

 	</div>

	</div>




</div>	