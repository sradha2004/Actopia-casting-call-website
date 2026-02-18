<?php
include 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM messages");
echo "<h2>Contact Us Messages</h2>";
echo "<table border='1'>
<tr><th>Name</th><th>Email</th><th>Message</th></tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['message']."</td></tr>";
}
echo "</table>";
?>