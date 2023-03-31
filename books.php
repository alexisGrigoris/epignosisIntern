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
        <title> All books </title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap');

      body{
        background:url("images/study.jpg");
        font-family: 'Roboto', sans-serif;
        box-sizing: border-box;
        margin:0;
        padding:0;
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
			
      /* font-styles */

            a{
          color:black;
        }
        
            a:hover{
          color:none;
        }
        
      .author, .type, .copies,  .title{
        font-weight:bold;
        display:inline-block;
      }

      .inline{
        display:inline-block;
      }
      
      .type{
        font-size:16px;
      }

      .copies{
        font-size:14px;
      }

      .author{
        font-size:18px;
      }

      .title{
        font-size:28px;
        font-weight:900;
        display:block;
      }

    /* Borrow book btn */

    .borrow{
      height:100%;
      width:100%;
    }

    .borrow-btn{
      color: black;
      background-color: white;
      display: inline-block;
      text-decoration: none;
      padding: 0.9em 2em;
      margin-top:5%;
      border-radius: 1em;
  }

    .borrow-btn:hover{
        background-color: #252525;
        color:#fff;
    }

    /* Main content */

    .flex-container {
      margin:0 5%;
      display: flex;
      flex-wrap: wrap;
    }

    .flex-item{
      padding: 0.1em;
      flex: 22%;
      display: flex;
      flex-wrap: wrap;
      background-color:white;
      border-radius: 1em;
      margin:1em;
      width:30em;
    }

    .split{
      flex: 50%;
      display: flex;
    }

    .book-cover{
      font-size:2em;
    }

    .book-details{
      padding:1em;
      width:70%;
    }

    .book-img{
      height:8em;
      width:6em;
    }

    section{
      padding:3em 0;
      background-color:white;
      margin:1em 6%;
      text-align:center;
      border-radius: 1em;

    }

      .msg{
    font-size:Larger;
    font-weight:bold;
    text-decoration:underline;
    color:red;
    margin:auto;
  }

    /* Responsive layout  */
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

    @media all and (max-width:30em){
    .borrow-btn{
    display:block;
    margin:0.2em auto;
      }
    }


    </style>
</head>
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
	<a class="btn btn-outline-success my-2 my-sm-0 flex " href="index.php?logout='1'">Logout</a>
	</div>
  </div>
 
</nav>

<section>

<?php
if(isset($message)){
   foreach($message as $message){
    echo '<div class="message" onclick="this.remove();"> <p class="msg"> '.$message .' </p></div>';
  }
}

if(isset($added_book_msg)){
   foreach($added_book_msg as $added_book_msg){
      echo '<div class="message" onclick="this.remove();"> <p class="msg"> '.$added_book_msg .' was added to your borrowed books list. </p></div>';
   }
}
?>
<h1>Below you can find a list of books which are available for you to borrow!</h1>


</section>
  <div class="flex-container">
    
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'school-library');
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
    $sql = "SELECT id, title, author, type, img, copies FROM ebooks";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo '
            <form method="POST"  class="flex-container flex-item"action="">
              <div class="flex-item">
                    <div class="split">
                      <div class="book-cover">
                        <img src="',$row["img"],'" class="book-img">
                      </div>
                      <div class="book-details">

                        <p class = "title">', $row["title"],'</p>
                        <p class="inline"> Author : </p> <p class="author"> ', $row["author"],'</p> <br>
                        <p class="inline"> Author : </p> <p class="type"> ', $row["type"],'</p> <br>
                        <p class="inline">No. of copies : </p> <p class="copies">  ', $row["copies"],'</p>
                        <input  type ="hidden" name="title" value="',$row["title"] ,'"> 
                        <input  type ="hidden" name="copies" value="',$row["copies"] ,'"> 
                        <input  type ="hidden" name="id" value="',$row["id"] ,'"> 
                        
                      </div>
                    </div>
                    <div class="borrow">
                      <button type="submit" class="borrow-btn" name="borrow" style="background-color:##91ccec" > Borrow </button>
                    </div>

              </div>
            </form>
    ';
    }
    }
    else { echo "0 results"; }
    $conn->close();
    ?>  

  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>