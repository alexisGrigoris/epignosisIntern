<?php 
include 'server.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "epignosis-library");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `borrowed-books`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo '
<form method="POST"  class="flex-container flex-item"action="">
<tr><td>' . $row["book_name"]. '</td></tr>
<input  type ="hidden" name="trythis" value="',$row["book_name"] ,'"> 

</form>
';

}
echo'
<button type="submit" class="return-btn" style="background-color:##91ccec" > Return Book </button>
</form>';

echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>