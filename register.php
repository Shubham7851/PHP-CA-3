<?php
include 'config.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$first_name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!');</script>";
        header("Location: login.php"); 
        exit();
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="container">
       
        <div class="left-section">
            <div>
                <h2>Capturing Moments, Creating Memories</h2>
            </div>
        </div>

      
        <div class="right-section">
            <h1>Create an Account</h1>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first_name" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="agree" required>
                    <label for="agree">I agree to the Terms & Conditions</label>
                </div>
                <button type="submit">Create Account</button>
            </form>

            <div class="social-buttons">
                <a href="#"><i class="fab fa-google"></i> Google</a>
                <a href="#"><i class="fab fa-apple"></i> Apple</a>
            </div>
        </div>
    </div>
</body>
</html>
