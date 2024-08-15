<!-- This page contains a form that allows users to input data. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional CSS file -->
</head>
<body>
    <h1>Results</h1>
    <?php
    // Start the session to retrieve stored data
    session_start();

    // Check if results are available in session
    if (isset($_SESSION['results'])) {
        echo "<ul>";
        foreach ($_SESSION['results'] as $result) {
            echo "<li>" . htmlspecialchars($result) . "</li>"; // Display results securely
        }
        echo "</ul>";
    } else {
        echo "<p>No results available. Please enter some data.</p>";
    }
    ?>

    <a href="input.php">Go to Input Page</a>
</body>
</html>