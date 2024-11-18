<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Social Media Analytics</h2>
            <ul>
                <li><a href="#"><i class="fas fa-chart-line"></i> Overview</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fas fa-cogs"></i> Settings</a></li>
                <li><a href="logout.php" class="logout-button"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
                <p>Here's a quick look at your social media analytics:</p>
            </header>

            <div class="analytics-cards">
                <div class="card">
                    <h3>120</h3>
                    <p>Likes</p>
                </div>
                <div class="card">
                    <h3>45</h3>
                    <p>Comments</p>
                </div>
                <div class="card">
                    <h3>30</h3>
                    <p>Shares</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
