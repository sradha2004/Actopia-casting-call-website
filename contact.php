<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="welcome to ACTOPIA -Yourgateway to the latest acting careers and opprunities">
  <link rel="stylesheet" href="contact.css">
  <title>ACTOPIA</title>
</head>
<body>
    <?php include 'header.php'; ?>
<div class="container">
        <h2>Contact Us</h2>
        <form>
            <label for="name">Your Name:</label>
            <input type="text" id="name" placeholder="Enter your name">

            <label for="email">Your Email:</label>
            <input type="email" id="email" placeholder="Enter your email">

            <label for="message">Your Message:</label>
            <textarea id="message" rows="5" placeholder="Enter your message"></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
    <?php include 'footer.html'; ?>

</body>
</html>