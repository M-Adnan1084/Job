<?php include '../model/db_connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="control/validation.js"></script>
</head>
<body>
    <div class="container">
        <h1>Job Application Form</h1>
        <form action="submit_application.php" method="post" enctype="multipart/form-data">
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name">
    
    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email">
    
    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone">
    
    <label for="resume">Resume:</label>
    <input type="file" id="resume" name="resume">
    
    <label for="letter">Cover Letter:</label>
    <textarea id="letter" name="letter"></textarea>
    
    <button type="submit" name="submit" class="ab">submit</button>
        </form>
        <script src="../control/validation.js"></script>
    </div>
</body>
</html>
