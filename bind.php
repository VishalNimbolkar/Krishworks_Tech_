while($row = mysqli_fetch_array($result))
{

$student_name = $row['student_name'];
$phone_no = $row['phone_no'];

echo ('<a href="user_data.php?student_name=' . $student_name . '">' . $phone_no . '</a>');
}