<?php
$servername="localhost";
$username="23mca039";
$password="2314";
$dbname="23mca039";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
$sql="INSERT INTO student(name,course,age)VALUES('$_POST[name]','$_POST[course]','$_POST[age]')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
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