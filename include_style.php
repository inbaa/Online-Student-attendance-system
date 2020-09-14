  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- for font -->
<link href="https://fonts.googleapis.com/css?family=Palanquin Dark" rel="stylesheet">
  <!-- date_picker -->
    
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  } );
  </script>
<!-- icon -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style type="text/css">
	nav{
background-color: #424242;
}

nav>div>div>ul>li>a{
color: white;
}

nav>div>div>a{
color: white;
}

.icon-bar{
background-color: white;
}

body{
  background-color: #EFF9F4;
  font-family: 'Palanquin Dark';
  color: #465C8D;
}
	.grid-container {
	  display: grid;
	  justify-content: center;
	  text-decoration: none;
	  grid-template-columns: 150px 150px;
	  grid-template-rows: 150px 150px; 
	  grid-gap: 10px;
	  width: 50%;
	  height: 50%;
	  position: absolute;
	  top:0;
	  bottom: 0;
	  left: 0;
	  right: 0; 
	  margin: auto;
	}

	.grid-container > a:hover {
	  text-decoration: none;
	  filter: brightness(85%);
	}

	.grid-container > a > div {
		height: 150px;
	  text-align: center;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	.grid-container > a  > div > i{
	  margin-top: 30%;
	  font-size:36px;
	  color: white;
	}
	
	.myfontround {
      background-color: #4CAF50;
      border: none;
      color: white;
      text-align: center;
      text-decoration: none;
      display: inline;
      font-size: 14px;
      width:30px;
      height: 30px;
      border-radius: 50%;
    }

	.grid-container > a  > div > p{
	  color: white;
	  font-size: 20px;
	}

	.my-float{
		margin-top:22px;
	}

	.floatbtn{
		position:fixed;
		width:60px;
		height:60px;
		bottom:40px;
		right:40px;
		background-color:#0C9;
		color:#FFF;
		border-radius:50px;
		text-align:center;
		box-shadow: 2px 2px 3px #999;
	}
	
		a >.container:hover {
	  text-decoration: none;
	  filter: brightness(85%);
	}
	
	#chatbox{ margin: 50px; width: 90%}
	
	.refreshbtn{
		position:fixed;
		width:40px;
		height:40px;
		top:60px;
		right:40px;
		background-color:#00dd00;
		color:#FFF;
		border-radius:50px;
		text-align:center;
	}

	table{ width: 300px; height: 150px; } 
	td{padding: 10px; background-color: #FAFAD2 }
	
    .footer {
	   position: fixed;
	   left: 0;
	   bottom: 0;
	   background-color: green;
	   width: 100%;
	   height: 50;
    }
	
    .right {  float:right; width: 60%; }
    .left { float: left; width: 60%; }
	
	#message {
	   float: left;
	   width: 80%;
	   height: 40px;
	   padding: 10px;
	   border-radius: 25px;
		border: 2px solid #609;
    }
			
	.send {	
      background-color: #0000FF;
      border: none;
      color: white;
      text-align: center;
      text-decoration: none;
      display: inline;
      font-size: 20px;
      width:40px;
      height: 40px;
      border-radius: 50%;
    }
</style>