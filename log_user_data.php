<?php
// log_user_data.php

// Include the database configuration file
require 'panel/db_config.php';

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the AJAX request
    $ip_address = $_POST['ip_address'] ?? '';
    $browser_info = $_POST['browser_info'] ?? '';
    $visit_time = $_POST['visit_time'] ?? '';
    $referrer = $_POST['referrer'] ?? '';
    $referring_page = $_POST['referring_page'] ?? '';

    // Prepare the SQL statement to insert the data
    $sql = "INSERT INTO user_tracking (ip_address, browser_info, visit_time, referrer, referring_page) 
            VALUES (?, ?, ?, ?, ?)";

    // Use prepared statements to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssss", $ip_address, $browser_info, $visit_time, $referrer, $referring_page);

        // Execute the statement and check for success
        if ($stmt->execute()) {
            echo "Data logged successfully!";
        } else {
            // Echo error if the execution fails
            echo "Execution error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Echo error if the preparation fails
        echo "Preparation error: " . $conn->error;
    }
} else {
    // Return an error message for non-POST requests
    echo "Invalid request method.";
}

// Close the connection
$conn->close();
?>
