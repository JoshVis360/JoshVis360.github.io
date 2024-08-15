<!-- input.php: Users can enter new data via a form, which submits to save.php. -->

<?php
$dataFile = 'data.json';

// Fetch existing data from the file
$data = [
    'all_requests' => 0,
    'open_requests' => 0,
    'quiz_requests' => 0,
    'module_setup_requests' => 0,
    'enrollment_requests' => 0
];

if (file_exists($dataFile)) {
    $data = json_decode(file_get_contents($dataFile), true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Add New Data</h1>
        <form action="save.php" method="POST">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    All Requests Received: <span class="badge badge-primary"><?php echo $data['all_requests']; ?></span>
                    <div>
                        <button type="submit" name="type" value="all_requests" class="btn btn-success">+1</button>
                        <input type="number" name="all_requests_value" min="0" placeholder="Enter number" class="form-control d-inline-block w-auto ml-2">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Current Open Requests: <span class="badge badge-primary"><?php echo $data['open_requests']; ?></span>
                    <div>
                        <button type="submit" name="type" value="open_requests" class="btn btn-success">+1</button>
                        <input type="number" name="open_requests_value" min="0" placeholder="Enter number" class="form-control d-inline-block w-auto ml-2">
                        <!-- Reset to 0 button -->
                        <button type="submit" name="reset_open_requests" value="1" class="btn btn-danger ml-2">Reset to 0</button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Quiz Requests: <span class="badge badge-primary"><?php echo $data['quiz_requests']; ?></span>
                    <div>
                        <button type="submit" name="type" value="quiz_requests" class="btn btn-success">+1</button>
                        <input type="number" name="quiz_requests_value" min="0" placeholder="Enter number" class="form-control d-inline-block w-auto ml-2">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Module Setup Requests: <span class="badge badge-primary"><?php echo $data['module_setup_requests']; ?></span>
                    <div>
                        <button type="submit" name="type" value="module_setup_requests" class="btn btn-success">+1</button>
                        <input type="number" name="module_setup_requests_value" min="0" placeholder="Enter number" class="form-control d-inline-block w-auto ml-2">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Enrollment Requests: <span class="badge badge-primary"><?php echo $data['enrollment_requests']; ?></span>
                    <div>
                        <button type="submit" name="type" value="enrollment_requests" class="btn btn-success">+1</button>
                        <input type="number" name="enrollment_requests_value" min="0" placeholder="Enter number" class="form-control d-inline-block w-auto ml-2">
                    </div>
                </li>
            </ul>
        </form>
        <a href="index.php" class="btn btn-secondary mt-4">Back to Index</a>
    </div>
</body>
</html>

