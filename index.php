<?php
include(__DIR__.'/include/db_config.php');

$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$urlComponents = parse_url($currentURL);
$path = $urlComponents['path'];
$parts = explode('/', $path);

$showPage = 'web-index.php';

if (count($parts) > 1 && $parts[1] === "blog-details") {
    if (count($parts) > 2) {

        // C2 FIX: sanitize slug and use a prepared statement — no more raw concatenation
        $perma = preg_replace('/[^a-zA-Z0-9\-_]/', '', $parts[2]);

        if (!empty($perma)) {
            try {
                $stmt = $conn->prepare("SELECT * FROM `blog` WHERE `perma` LIKE ?");
                $like  = '%' . $perma . '%';
                $stmt->bind_param('s', $like);
                $stmt->execute();
                $result = $stmt->get_result();
                $stmt->close();
            } catch (Exception $e) {
                // H1 FIX: never expose internal errors to the browser
                error_log('Blog query error: ' . $e->getMessage());
            }
        }

        $showPage = 'blog-details.php';
    }
} else {
    if (isset($parts[1]) && !empty($parts[1])) {

        if ($parts[1] == 'index') {
            $showPage = 'web-index.php';
        } else {
            // H5 FIX: strip everything except safe slug characters before building filename
            $slug = preg_replace('/[^a-zA-Z0-9\-_]/', '', rtrim($parts[1], '.php'));
            $showPage = $slug . '.php';
        }

    } else {
        $showPage = 'web-index.php';
    }
}

try {
    if (!file_exists($showPage)) {
        $showPage = 'web-index.php';
    }
    require_once($showPage);
} catch (Exception $e) {
    // H1 FIX: log silently, never reveal details
    error_log('Page load error: ' . $e->getMessage());
    $showPage = 'web-index.php';
    require_once($showPage);
}
?>