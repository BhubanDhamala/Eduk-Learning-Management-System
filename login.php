<?php
include('admin/dbcon.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Query to check for student
$query = "SELECT * FROM student WHERE username='$username'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$num_row = mysqli_num_rows($result);

// Query to check for teacher
$query_teacher = "SELECT * FROM teacher WHERE username='$username'";
$result_teacher = mysqli_query($conn, $query_teacher) or die(mysqli_error($conn));
$row_teacher = mysqli_fetch_array($result_teacher);
$num_row_teacher = mysqli_num_rows($result_teacher);

// Verify student password
if ($num_row > 0 && password_verify($password, $row['password'])) {
    $_SESSION['id'] = $row['student_id'];
    echo 'true_student';

// Verify teacher password
} else if ($num_row_teacher > 0 && password_verify($password, $row_teacher['password'])) {
    $_SESSION['id'] = $row_teacher['teacher_id'];
    echo 'true';

} else {
    echo 'false';
}
?>
