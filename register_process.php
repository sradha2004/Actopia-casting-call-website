<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate required fields
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "❌ Username and password are required.";
        exit();
    }

    // Sanitize input
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $age = $_POST['age'] ?? '';
    $address = $_POST['address'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone_number'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $hobbies = $_POST['hobbies'] ?? '';
    $interest = $_POST['areas_of_interest'] ?? '';
    $experience = $_POST['experience_description'] ?? '';

    // File upload paths
    $photo_path = "uploads/" . basename($_FILES['photo']['name']);
    $govt_id_path = "uploads/" . basename($_FILES['govt_id']['name']);

    // Create folder if not exists
    if (!is_dir("uploads")) {
        mkdir("uploads", 0777, true);
    }

    // Move files
    if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
    }
    if (is_uploaded_file($_FILES['govt_id']['tmp_name'])) {
        move_uploaded_file($_FILES['govt_id']['tmp_name'], $govt_id_path);
    }

    // Insert using prepared statement
    $stmt = $conn->prepare("INSERT INTO registration (username, password, first_name, last_name, age, address, email, phone_number, dob, hobbies, areas_of_interest, experience_description, photo, govt_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssisssssssss", $username, $password, $first_name, $last_name, $age, $address, $email, $phone, $dob, $hobbies, $interest, $experience, $photo_path, $govt_id_path);

    if ($stmt->execute()) {
        echo "✅ Registration successful!";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>