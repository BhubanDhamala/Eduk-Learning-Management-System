<?php
include('admin/dbcon.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$class_id = $_POST['class_id'];

// Hash the password before saving it
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = mysqli_query($conn, "SELECT * FROM student WHERE username='$username' AND firstname='$firstname' AND lastname='$lastname' AND class_id = '$class_id'") or die(mysqli_error());
$row = mysqli_fetch_array($query);
$id = $row['student_id'];

$count = mysqli_num_rows($query);
if ($count > 0) {
    // Update the password in the database with the hashed password
    mysqli_query($conn, "UPDATE student SET password = '$hashed_password', status = 'Registered' WHERE student_id = '$id'") or die(mysqli_error());
    $_SESSION['id'] = $id;
    echo 'true';
} else {
    echo 'false';
}
?>
