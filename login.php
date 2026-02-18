<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <div class="login-container">
   <div class="login-box">
    <h2>Login</h2>
    <form action="login_process.php" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="login-button">Login</button>
      <a href="#" 
      class="forgot-password" >Forgot password?</a>
    </form>
  </div>
</div>
  <?php include 'footer.html'; ?>
</body>
</html>