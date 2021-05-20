<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "myDB";
$port = "3307";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->mysqli_error) {
  die("Connection failed: " . $conn->mysqli_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}


$sqll="CREATE TABLE `users` (
  `student_name` varchar(50)NOT NULL,
  `phone_no` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,z
  `marks_sub1` int(10) NOT NULL,
  `marks_sub2` int(10) NOT NULL,
  `marks_sub3` int(10) NOT NULL,
  `marks_sub4` int(10) NOT NULL,
  `marks_sub5` int(10) NOT NULL,
  'total_marks' int(100)NOT NULL
)";
if (mysqli_query($conn, $sqll)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}


INSERT INTO `users` (`student_name`, `phone_no`, `email`, `marks_sub1`, `marks_sub2`, `marks_sub3`, `marks_sub4`, `marks_sub5`, `total_marks`) VALUES ('Vishal', '1111111111', 'vishalnimbolkar10@gmail.com', '90', '90', '90', '90', '90', '450');
INSERT INTO `users` (`student_name`, `phone_no`, `email`, `marks_sub1`, `marks_sub2`, `marks_sub3`, `marks_sub4`, `marks_sub5`, `total_marks`) VALUES ('Amol', '222222222', 'amolnimbolkar10@gmail.com', '50', '50', '50', '50', '50', '250');

$conn->close();
?>
