<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "❌ Please enter both username and password.";
        exit();
    }

    // Clean and normalize user input
    $username = trim(strtolower($_POST['username']));
    $password = $_POST['password'];

    // Fetch user from registration table
    $sql = "SELECT * FROM registration WHERE LOWER(username) = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // Works for both hashed and plain passwords
        if (password_verify($password, $row['password']) || $password == $row['password']) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            echo "✅ Login successful!";
            header("Location: user_dashboard.php"); // redirect after success
            exit();
        } else {
            echo "❌ Incorrect password.";
        }
    } else {
        echo "❌ No user found with that username.";
    }

    mysqli_close($conn);
}
?>