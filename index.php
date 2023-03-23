<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
	body,h1 {font-family: "Raleway", sans-serif}
	body, html {height: 100%}
	.bgimg {
	background-image: url('study.jpg');
	min-height: 100%;
	margin:0;
	background-position: center;
	background-size: cover;
	}

	.epig{
		height:40px;
		width:35px;
	}
	.logout{
		
		margin-left:100%;
		background-color:blue;
		padding:1em;
	}
	
	.msg{
		width: 80%;
		text-align:center;
	}

	.opacity{
		opacity: 10%;
	}


	.flex{
	
		margin:auto;
	}

	.bold{
		font-size:larger;
		color:white;	
	}
	.bold:hover{
		color:#91ccec;;
		text-decoration:none;
	}

	a{
		color:black;
	}
	
	a:hover{
		color:none;
	}
	.icon{
		height:3vh;
		width:3vh;
	}

	.flex{
	display: block;
	margin-right:0;
	float:left;
		
	}
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"> 	<img src="epig.png" class="epig"> </img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home</a>
      <a class="nav-item nav-link" href="books.php">Book list 📚</a>
	
	
	  
    </div>
	<div class="flex">
	<a class="nav-item nav-link flex " href="#"> <img src="profile.png" class="icon" >   <?php echo $_SESSION['username']; ?> </a>
	<a class="btn btn-outline-success my-2 my-sm-0 flex" href="index.php?logout='1'">Logout</a>
	</div>
  </div>
 
</nav>
<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">

	<div class="w3-display-middle msg">
		<h1 class=" w3-animate-top">Welcome to Epignosis library <?php echo $_SESSION['username']; ?></h1>
		<hr class="w3-border-grey" style="margin:auto;width:40%">
		<p class="w3-large w3-center"> <a href="books.php" class="bold">📚 Click here to browse all available books! 📚</a></p>
	</div>
	

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
