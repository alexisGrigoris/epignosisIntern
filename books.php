<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name= "viewport" content="width=device-width, user-scalable=no, initial=scale=1.0, maximun-scale=1.0, minimun-scale=1.0" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Product List and Grid View</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap');

      body{
        background:url("study.jpg");
        font-family: 'Roboto', sans-serif;
      }
        *{
          box-sizing: border-box;
          margin:0px;
          padding:0px;
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


	.bold{
		font-size:larger;
		color:white;	
	}
	.bold:hover{
		color:cyan;
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
  margin:auto;
	margin-right:0;
	float:left;	
	}

  .borrow-btn{
    color: black;
    background-color: white;
    display: inline-block;
    text-decoration: none;
    padding: 10px 25px;
    margin: 5% auto;
    border-radius: 1em;
}

.borrow-btn:hover{
    background-color: #252525;
    color:#fff;
}
@media all and (max-width:30em){
.borrow-btn{
display:block;
margin:0.2em auto;
  }
}

.flex-container {
  margin:0 5%;
  display: flex;
  flex-wrap: wrap;
  font-size: 1em;
 
  
}


.flex-item{
  padding: 1em;
  flex: 30%;
  display: flex;
  flex-wrap: wrap;
  background-color:white;
  box-shadow: 5px 10px 8px 10px white;
  border-radius: 1em;
  margin:1em;
  
}

.split{
  flex: 50%;
  display: flex;
  flex-wrap: wrap;

}

.book-cover{
  font-size:3em;

}

.book-details{
  padding:1em;
  width:50%;


}

.book-img{
  height:7em;
  width:5em;
}

.borrow{
  height:100%;
  width:100%;
  margin:auto;
}

.author{
  font-size:18px;
  font-weight:bold;
  display:inline-block;
}

.inline{
  display:inline-block;
}



.type{
  font-size:16px;
  font-weight:bold;
  display:inline-block;

}

.copies{
  font-size:14px;
  font-weight:bold;
  display:inline-block;
}


.title{
  font-size:28px;
  font-weight:900;
  display:block;
}


section{
  padding:5em 0;
  background-color:white;
  margin:1em 6%;
  text-align:center;
  box-shadow: 5px 10px 8px 10px white;
  border-radius: 1em;

}

/* Responsive layout - makes a one column-layout instead of a two-column layout */
@media (max-width: 400px) {
  .flex-item{
    flex: 50%;
  }
}
@media (max-width: 800px) {
  .flex-item{
    flex: 100%;
  }
}

nav{
  background-color:white;
}

.lightblue{
  border-color:#91ccec;
  color:#91ccec;
}
.lightblue:hover{
  background-color:#91ccec;
  border-color:#91ccec;
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
      <a class="nav-item nav-link" href="mybooks.php">My books 📚</a>

    </div>
	<div class="flex">

	<a class="nav-item nav-link flex " href="#"> <img src="profile.png" class="icon" >  <?php echo $_SESSION['username']; ?> </a>
	<a class="btn btn-outline-success my-2 my-sm-0 flex lightblue" href="index.php?logout='1'">Logout</a>
	</div>
  </div>
 
</nav>
<section>


<h1>Below you can find a list of books which are available for you to borrow!</h1>


</section>
    <div class="flex-container">
    <?php


$conn = mysqli_connect('localhost', 'root', '', 'epignosis-library');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
$sql = "SELECT title, author, type, img,  copies FROM ebooks";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo '
          <div class="flex-item">
                <div class="split">
                <div class="book-cover">
                  <img src="',$row["img"],'" class="book-img">
                </div>
                <div class="book-details">
                  <p class = "title">', $row["title"],'</p>
                  <p class="inline"> Author : </p> <p class="author"> ', $row["author"],'</p> <br>
                  <p class="inline"> Book type : </p><p class="type"> ', $row["type"],'</p> <br>
                 <p class="inline">No. of copies : </p> <p class="copies">  ', $row["copies"],'</p>
                </div>
                </div>
                <div class="borrow">
                <button class="borrow-btn " style="background-color:##91ccec" > Borrow </button>
                </div>

          </div>

';
}
echo " </table> ";
} else { echo "0 results"; }
$conn->close();
?>  
</div>


 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>