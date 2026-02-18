<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<style>
    .other{
        width: calc(100%-12px);
        padding: 12px;
        border:1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        text-align: center;
    }
</style>
<body>
    <?php include 'header.php'; ?>
    <div class="container-login-box">
        <h2>Register</h2>
        <form action="register_process.php" method="post" class="registration-form" enctype="multipart/form-data">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <!-- Input fields for additional details -->
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" placeholder="Enter your age" class="other" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="other" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="tel" id="phone_number" name="phone_number" class="other" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" class="other" required>
        </div>
        <div class="form-group">
            <label for="hobbies">Hobbies</label>
            <input type="text" id="hobbies" name="hobbies" placeholder="Enter your hobbies">
        </div>
        <div class="form-group">
            <label for="areas_of_interest">Areas of Interest in Acting</label>
            <textarea id="areas_of_interest" name="areas_of_interest" class="other" placeholder="Enter your areas of interest"></textarea>
        </div>
        <div class="form-group">
            <label for="experience_description">Description of Previous Experience in Cinema</label>
            <textarea id="experience_description" name="experience_description" class="other" placeholder="Enter your experience description"></textarea>
        </div>
        <div class="form-group">
            <label for="photo">Upload Photo</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="govt_id">Upload Government ID</label>
            <input type="file" id="govt_id" name="govt_id" accept="image/*,application/pdf" required>  
        </div>
        <button type="submit" class="btn-login"> Register</button>
    </form>
 </div>
 <?php include 'footer.html';?>
</body>
</html>