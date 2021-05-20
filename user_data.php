$student_name = $_GET['student_name'];

$result = mysqli_query($con,"SELECT * FROM users WHERE student_name = $student_name");