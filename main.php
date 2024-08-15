<!-- main.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1>Enter Data</h1>
    <form action="store.php" method="POST">
        <label for="closed">All Requests Closed:</label>
        <input type="number" id="closed" name="closed" required><br>

        <label for="current">All Current Requests Received:</label>
        <input type="number" id="current" name="current" required><br>

        <label for="quizzes">Quizzes Set Up:</label>
        <input type="number" id="quizzes" name="quizzes" required><br>

        <label for="modules">Modules Set Up:</label>
        <input type="number" id="modules" name="modules" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>