<?php
session_start();
if ($_SESSION['username'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - ACTOPIA</title>
    
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="header">
        <h2>ACTOPIA - Admin Dashboard</h2>
    </div>
    <div class="content">
        <h3>Post New Job Opening</h3>
        <form method="POST" action="post_job.php">
            <input type="text" name="title" placeholder="Job Title" required><br><br>
            <textarea name="description" placeholder="Job Description" required></textarea><br><br>
            <button type="submit">Post</button>
        </form>

        <h3>Messages</h3>
        <table>
            <tr>
                <th>Name</th><th>Email</th><th>Message</th><th>Received At</th>
            </tr>
            <?php
            include 'db.php';
            $msgQuery = mysqli_query($conn, "SELECT * FROM messages");
            while ($msg = mysqli_fetch_assoc($msgQuery)) {
                echo "<tr>
                        <td>{$msg['name']}</td>
                        <td>{$msg['email']}</td>
                        <td>{$msg['message']}</td>
                        <td>{$msg['timestamp']}</td>
                      </tr>";
            }
            ?>
        </table>
    </div>
    <?php include 'footer.html';?>
</body>
</html>