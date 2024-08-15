<!-- This page retrieves the stored data and displays the results. -->



<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <h1>Results</h1>
    <p>All Requests Closed: <?php echo isset($_SESSION['closed']) ? $_SESSION['closed'] : 'No data'; ?></p>
    <p>All Current Requests Received: <?php echo isset($_SESSION['current']) ? $_SESSION['current'] : 'No data'; ?></p>
    <p>Quizzes Set Up: <?php echo isset($_SESSION['quizzes']) ? $_SESSION['quizzes'] : 'No data'; ?></p>
    <p>Modules Set Up: <?php echo isset($_SESSION['modules']) ? $_SESSION['modules'] : 'No data'; ?></p>
    
    <a href="index.php">Go Back</a>
</body>
</html>