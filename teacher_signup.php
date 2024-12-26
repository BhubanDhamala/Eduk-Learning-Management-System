<?php
include('admin/dbcon.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$department_id = $_POST['department_id'];

// Check if teacher already exists in the database based on name and department
$query = mysqli_query($conn, "SELECT * FROM teacher WHERE firstname='$firstname' AND lastname='$lastname' AND department_id = '$department_id'") or die(mysqli_error());
$row = mysqli_fetch_array($query);
$id = $row['teacher_id'];

$count = mysqli_num_rows($query);
if ($count > 0) {
    // Hash the password before saving it to the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Update teacher data with hashed password
    mysqli_query($conn, "UPDATE teacher SET username='$username', password = '$hashed_password', teacher_status = 'Registered' WHERE teacher_id = '$id'") or die(mysqli_error());
    
    // Store teacher ID in session
    $_SESSION['id'] = $id;
    
    echo 'true';  // Success
} else {
    echo 'false';  // Teacher not found in the database
}
?>
