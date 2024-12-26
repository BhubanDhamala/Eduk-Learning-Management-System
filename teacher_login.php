<?php
session_start();
include('admin/dbcon.php');  // Database connection

// Get username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database for teacher data based on the username
$query = "SELECT * FROM teacher WHERE username='$username'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if ($row) {
    // Use password_verify() to compare the entered password with the stored hashed password
    if (password_verify($password, $row['password'])) {
        // Successful login
        $_SESSION['id'] = $row['teacher_id'];  // Store the teacher ID in session
        echo 'true_teacher';  // Return success for teacher login
        // You can redirect them to the teacher dashboard
        // header('Location: dashboard_teacher.php');
    } else {
        // Password doesn't match
        echo 'false';  // Login failed
    }
} else {
    // Username not found
    echo 'false';  // Login failed
}
?>
