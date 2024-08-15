<!-- This page processes the data submitted from the form and stores it in a session variable. -->

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['closed'] = intval($_POST['closed']);
    $_SESSION['current'] = intval($_POST['current']);
    $_SESSION['quizzes'] = intval($_POST['quizzes']);
    $_SESSION['modules'] = intval($_POST['modules']);
}

header('Location: results.php');
exit();