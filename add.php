<?php
include("header.php");
include("db.php");
	$flag=0;

	if(isset($_POST['submit']))
	{
		///check if student already exists
		// and name =post[name] is not used bcoz if they enter diff name for existing roll no. if will accept but it shouldnt
		$selectresult = mysqli_query($con,"select 1 FROM student WHERE admno = '$_POST[roll]'  ");
    	if(mysqli_num_rows($selectresult)>0)
    		{
        echo "<script>
		alert('Student with this Admission number already exist!');
		</script>";
    		}
    else{
    //insert
		$result=mysqli_query($con,"insert into student(name, admno) values('$_POST[name]','$_POST[roll]') "); 
		
		if($result)
		{
			$flag=1;
		}

		}
	
	}

?>
<!-- Hide successfully added message after 2 seconds -->
<head>
	<script>		
					
			setTimeout(function() {
			  document.getElementById('hide').style.display='none';
			}, 3*1000);
			
		</script>
</head>
<body>
<div class="container">
	<h2><center><b>Add Student<b></center> </h2> 
	
<div class="panel panel-default">

<!-- Show success message after adding -->
	<?php if($flag) { ?>

	<div id="hide" class="alert alert-success">
	<strong>!Success</strong>&nbsp;Attendance data successfully inserted.	
	</div>
	
	<?php }	?>

	<div class="panel-body">
	<form action="add.php" method="post">

			
		<div class="form-group">

		<label for="roll">Admission Number</label>
		<input type="text" name="roll" id="roll" class="form-control" required>

		</div>

		<div class="form-group">

		<label for="name">Student Name</label>
		<input type="text" name="name" id="name" class="form-control" required>

		</div>
	
		<div class="form-group">

		<input type="submit" name="submit" class="btn btn-primary" value="Submit" required>

		</div>
	</form>
	</div>
</div>
<!--container-->
</div>