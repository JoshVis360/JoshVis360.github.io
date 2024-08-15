<!-- index.php: Displays the data from data.txt and provides a link to the input page. -->


<?php
$dataFile = 'data.json';

// Fetch data from the JSON file
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
    <title>Index Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .table-custom {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }
        .table-custom td, .table-custom th {
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            background-color: #f8f9fa;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Requests Summary</h1>
        <table class="table-custom">
            <tr>
                <th>All Requests Received</th>
                <td><?php echo $data['all_requests']; ?></td>
            </tr>
            <tr>
                <th>Current Open Requests</th>
                <td><?php echo $data['open_requests']; ?></td>
            </tr>
            <tr>
                <th>Quiz Requests</th>
                <td><?php echo $data['quiz_requests']; ?></td>
            </tr>
            <tr>
                <th>Module Setup Requests</th>
                <td><?php echo $data['module_setup_requests']; ?></td>
            </tr>
            <tr>
                <th>Enrollment Requests</th>
                <td><?php echo $data['enrollment_requests']; ?></td>
            </tr>
        </table>
        <a href="input.php" class="btn btn-primary mt-4">Add New Data</a>
    </div>
</body>
</html>


