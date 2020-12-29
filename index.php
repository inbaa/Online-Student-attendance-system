
<?php session_start();

include("db.php");
//faculty login
// Grab User submitted information
if(isset($_POST["faculty"]))
{

$name = $_POST["username"];
$pass = $_POST["password"];

$result = mysqli_query($con,"select fcode,subject FROM faculty WHERE name = '$name' and pwd = '$pass'");
$row  = mysqli_fetch_array($result);
//$row = mysqli_num_rows($result);
if(is_array($row)){
  $_SESSION["name"]=$name;
  $_SESSION["fcode"]=$row['fcode'];
  $_SESSION["subject"]=$row['subject'];
  $_SESSION["logged_in"]=1; 
    //redirect
    if(isset($_SESSION["fcode"])) {  
    header("Location:home.php");
    }

}

 else{
  echo "<script>
  alert('Invalid Credentials');
  </script>";

 }
 

}
//student login
if(isset($_POST["student"]))
{
$name = $_POST["uname"];
$pass = $_POST["paswd"];

$result = mysqli_query($con,"select name FROM student WHERE name = '$name' and admno = '$pass'");

$row = mysqli_num_rows($result);
if($row>0){
  //admno is password
  $_SESSION['name']=$name;
  $_SESSION['admno']=$pass;
  $_SESSION["logged_in"]=1; 
  header('Location: student_show_attendance.php');
  exit;
}
 else{
  echo "<script>
  alert('Invalid Credentials');
  </script>";
 } 

}

?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 


<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn{
  float: left;
  width: 50%;
}
 .signupbtn {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  float: right;
  padding: 10px 18px;
  background-color: #f44336;
    width: auto;
}
</style>
</head>
<body>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center>
<h1>Student Attendance</h1>
<!-- Faculty-->
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Faculty Login</button>&nbsp;&nbsp;

<div id="id01" class="modal ">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" width="40" height="120" class="avatar">
    </div>

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username"  pattern="[a-zA-Z0-9]+" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password"  name="password" required autocomplete="new-password">
        
      <button type="submit" name="faculty">Login</button>
     </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn pull-right">Cancel</button>
       <a  href="faculty_signup.php">Sign Up </a>
    </div>
  </form>
</div>

<!-- student-->

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Student Login</button>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="studlogin.png" alt="Avatar" width="40" height="120" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username"  pattern="[a-zA-Z0-9]+" name="uname" required>

      <label for="paswd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="paswd" required autocomplete="new-password">
        
      <button type="submit" name="student">Login</button>
     </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal for student
var modal2 = document.getElementById('id02');
// Get the modal for faculty
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</center>
</body>
</html>
