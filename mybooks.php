<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name= "viewport" content="width=device-width, user-scalable=no, initial=scale=1.0, maximun-scale=1.0, minimun-scale=1.0" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>My books</title>
</head>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap');

      body{
        background-color:grey;
        font-family: 'Roboto', sans-serif;
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
	
	.icon{
		height:3vh;
		width:3vh;
	}

	.flex{
	display: block;
  margin:auto;
	margin-right:0;
	float:left;	
	}

nav{
  background-color:white;
}


    </style>

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
	  <a class="nav-item nav-link" href="mybooks.php">My books 📚</a>

	
	  
    </div>
	<div class="flex">
	<a class="nav-item nav-link flex " href="#"> <img src="profile.png" class="icon" >   <?php echo $_SESSION['username']; ?> </a>
	<a class="btn btn-outline-success my-2 my-sm-0 flex" href="index.php?logout='1'">Logout</a>
	</div>
  </div>
 
</nav>
</body>
</html>