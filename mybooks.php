<?php include('server.php');

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
    font-family: 'Roboto', sans-serif;
    background:url('images/study.jpg');
 }
/* nav */
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

/* main content */

section{
  padding:3em 0;
  background-color:white;
  margin:1em 6%;
  text-align:center;
  border-radius: 1em;
}

.flex-container {
  margin:0 5%;
  border : 3px solid black;
}

.flex-item{
  padding: 0.1em;
  background-color:white;
  margin:1em;
}

/* font style */
.bold{
font-weight:bold;
font-size:larger;
}

p{
  display:inline;
}

a{
		color:black;
	}
	
a:hover{
		color:none;
	}
  
/* return btn */

.return-btn{
    color: black;
    background-color: white;
    text-decoration: none;
    padding: 0.9em 2em;
    margin-top:1%;
    border-radius: 1em;
}

.return-btn:hover{
    background-color: #252525;
    color:#fff;
}


.msg{
  font-size:Larger;
  font-weight:bold;
  text-decoration:underline;
  color:red;
  margin:auto;

}
@media all and (max-width:30em){
.return-btn{
display:block;
margin:0.2em auto;
  }
}

    </style>

<body>
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"> 	<img src="images/epig.png" class="epig"> </a>
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
	<a class="nav-item nav-link flex " href="#"> <img src="images/profile.png" class="icon" >   <?php echo $_SESSION['username']; ?> </a>
	<a class="btn btn-outline-success my-2 my-sm-0 flex" href="index.php?logout='1'">Logout</a>
	</div>
  </div>
 
</nav>

<section>

<h1> Do not forget that you need to return borrowed books within 30 days! </h1>
<?php
if(isset($returned_book_msg)){
   foreach($returned_book_msg as $returned_book_msg){
      echo '<div class="message" onclick="this.remove();"> <p class="msg"> '.$returned_book_msg .' </p></div>';
   }
}
?>

<div class="flex-container">

  <?php
    $conn = mysqli_connect("localhost", "root", "", "epignosis-library");
    // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
      $username = $_SESSION['username'];

      $borrowed_books =  mysqli_query($db, "SELECT * FROM `borrowed-books` WHERE user_id = '$username'");

      if (mysqli_num_rows($borrowed_books) > 0) {
      // output data of each row
        while($row = $borrowed_books->fetch_assoc()) {
        echo '
          <form method="POST"  class="flex-container flex-item"action="">
            <div class="flex-item">
              <p class="bold inline"> ', $row["book_name"],'</p> 
              <p> was borrowed by </p> <p class="bold inline"> ', $row["user_id"],'</p> 
              <p> on : </p> <p class="bold inline">  ',date('Y-m-d H:i:s', $row["borrow_time"]),'</p>
              <p> book id  </p> <p class="bold inline"> ', $row["book_id"],'</p> 


              <div class="return">
                <input  type ="hidden" name="conn_id" value="',$row["conn_id"] ,'"> 
                <button type="submit" class="return-btn" name="return" style="background-color:##91ccec" > Return Book </button>
              </div>

            </div>
          </form>
        ';
        }
      }
      else { echo ' <p class="bold inline">  You have not borrowed any books! </p>'; }
    $conn->close();
  ?>

</div>

</section>
</body>
</html>