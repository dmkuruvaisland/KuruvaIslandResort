<?php
// Database configuration template (Safe for GitHub)
// Copy this file to db_config.php on your server with actual credentials.

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
ini_set('log_errors', 1);

// Primary Database (Main website & Admin)
$servername = getenv('DB_HOST') ?: 'localhost';
$username   = getenv('DB_USER') ?: 'YOUR_DB_USER';
$password   = getenv('DB_PASS') ?: 'YOUR_DB_PASSWORD';
$database   = getenv('DB_NAME') ?: 'YOUR_DB_NAME';

// Secondary Database (Gallery & Blog)
$gallery_host = getenv('DB_HOST')         ?: 'localhost';
$gallery_user = getenv('DB_USER_GALLERY') ?: 'YOUR_GALLERY_DB_USER';
$gallery_pass = getenv('DB_PASS_GALLERY') ?: 'YOUR_GALLERY_DB_PASSWORD';
$gallery_db   = getenv('DB_NAME_GALLERY') ?: 'YOUR_GALLERY_DB_NAME';

try {
    mysqli_report(MYSQLI_REPORT_OFF);
    $conn = @new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        error_log('DB connection failed: ' . $conn->connect_error);
        $conn = null;
    }
} catch (Throwable $e) {
    error_log('DB connection failed: ' . $e->getMessage());
    $conn = null;
}
?>
