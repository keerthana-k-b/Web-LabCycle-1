<?php
$servername="localhost";
$username="23mca039";
$password="2314";
$dbname="23mca039";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, course, age FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " course" . $row["course"]. " age" . $row["age"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>