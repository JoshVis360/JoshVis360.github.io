<!-- save.php: This script saves the submitted data to data.txt and redirects back to the index page. -->

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

// Determine which type of request to update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Reset Current Open Requests to 0 if the reset button is pressed
    if (isset($_POST['reset_open_requests']) && $_POST['reset_open_requests'] == 1) {
        $data['open_requests'] = 0;
    } else {
        $type = $_POST['type'];

        // Increment the count if the button is clicked
        if (isset($type) && isset($data[$type])) {
            $data[$type]++;
        }

        // Update the value if the user inputs a number
        if (isset($_POST[$type . '_value']) && is_numeric($_POST[$type . '_value'])) {
            $data[$type] = (int)$_POST[$type . '_value'];
        }
    }

    // Save updated data back to the file
    file_put_contents($dataFile, json_encode($data));

    // Redirect to input page after saving
    header('Location: input.php');
    exit();
}
?>


