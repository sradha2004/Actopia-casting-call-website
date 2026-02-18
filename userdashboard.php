<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard - ACTOPIA</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="header">
        <h2>ACTOPIA</h2>
        <a class="logout" href="logout.php">Logout</a>
    </div>

    <h3 style="text-align:center;">Welcome, <?php echo htmlspecialchars($username); ?>!</h3>

    <h4 style="text-align:center;">Role Openings</h4>
    <table border="1" cellpadding="10" cellspacing="0" style="margin: auto; text-align: center;">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <?php
        include 'connection.php'; // Changed from db.php

        $result = mysqli_query($conn, "SELECT * FROM jobs");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . htmlspecialchars($row['title']) . "</td>
                        <td>" . htmlspecialchars($row['description']) . "</td>
                        <td><a href='apply.php?job_id=" . $row['id'] . "'>Apply</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No job openings found.</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </table>

    <?php include 'footer.html'; ?>
</body>
</html>