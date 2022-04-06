<?php
$server = "localhost";// your server
$userid = "u9tluqn8loftu"; // your user id
$pw = "gshsjkmcea9k"; // your pw
$db= "dbkzbj90eo4smd"; // your database

// Create connection
$conn = new mysqli($server, $userid, $pw );

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

//select the database
$conn->select_db($db);

//run a query
$sql = "SELECT * FROM food";
$result = $conn->query($sql);

//get results
if ($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
 {
  echo $row["name"]. " " . $row["price"]. "<br>";
 }
}
else
 echo "no results";

//close the connection
$conn->close();
?>
