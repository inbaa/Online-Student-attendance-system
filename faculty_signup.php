<?php
include("db.php");
	$flag=0;

	if(isset($_POST['submit']))
	{	
		//check if pass match
		if($_POST["pass"]==$_POST["retype"])
		{
	
    $selectresult = mysqli_query($con,"select 1 FROM faculty WHERE fcode = '$_POST[fcode]' or subject= '$_POST[subject]' ");
    if(mysqli_num_rows($selectresult)>0)
    {
        echo "<script>
		alert('Faculty code or Subject already exist!');
		</script>";
    }
    else{
    //insert
    $result=mysqli_query($con,"insert into faculty (fcode,pwd,name,subject) 
	values('$_POST[fcode]','$_POST[pass]','$_POST[name]','$_POST[subject]') "); 
		if($result)
		{
		echo "<script>
		alert('Data saved successfully.');
		window.location.href='index.php';
		</script>";
	
		}
	//else
	}
	//pass=retype
	}
	else
		{
		echo "<script>
		alert('Password does not match!');
		</script>";
		}

	}
?>

<head>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
 
</head>


<div class="panel panel-default">

	<div class="panel-heading">
	<h2>	
	<b><center>Faculty Sign Up</center><b>
	</h2>
	</div>

<div class="container">

	<div class="panel-body">
	<form action="" method="post">

		<div class="form-group">

		<label for="fcode">Faculty Code</label>
		<input type="text" name="fcode" id="fcode" class="form-control" pattern="[a-zA-Z0-9]+" required>

		</div>
		
		<div class="form-group">

		<label for="name">Name</label>
		<input type="text" name="name" id="name" class="form-control" pattern="[a-zA-Z\s]+" required>

		</div>

		<div class="form-group">

		<label for="pass">Password</label>
		<input type="Password" name="pass" id="pass"  class="form-control" required>

		</div>
		
		<div class="form-group">

		<label for="retype">Retype Password</label>
		<input type="Password" name="retype" id="retype"  class="form-control" required>

		</div>

		<div class="form-group">

		<label for="subject">Subject</label>
		<input type="text" name="subject" id="subject" class="form-control" pattern="[a-zA-Z\s]+" required>

		</div>

		<div class="form-group">

		<input type="submit" name="submit" class="btn btn-primary" value="Submit" required>

		</div>
	</form>
	</div>


</div>