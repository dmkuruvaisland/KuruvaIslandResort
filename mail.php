<?php
/**
 * Contact Form Mailer (no CAPTCHA) — Kuruva Island Resort
 *
 * Security fixes applied:
 *   - SMTP password moved to environment variable (getenv)
 *   - All inputs switched from $_GET to $_POST; sanitized
 *   - POST-only enforcement
 *   - Error messages never exposed to browser
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendors/autoload.php";

// -------------------------------------------------------
// Reject anything that is not a POST request
// -------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(403);
    die('403 Forbidden – POST only');
}

// -------------------------------------------------------
// Sanitize all inputs — prevent header injection
// -------------------------------------------------------
function sanitize_mail_input($value) {
    $value = str_replace(["\r", "\n", "%0a", "%0d", "%0A", "%0D"], '', $value);
    $value = str_replace("\0", '', $value);
    return trim($value);
}

$name    = htmlspecialchars(sanitize_mail_input($_POST['name']    ?? ''), ENT_QUOTES, 'UTF-8');
$email   = filter_var(sanitize_mail_input($_POST['email']   ?? ''), FILTER_SANITIZE_EMAIL);
$phone   = htmlspecialchars(sanitize_mail_input($_POST['phone']   ?? ''), ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars(sanitize_mail_input($_POST['subject'] ?? ''), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(sanitize_mail_input($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    die('Invalid email address');
}

// -------------------------------------------------------
// PHPMailer setup
// -------------------------------------------------------
$mail = new PHPMailer(true);

$mail->From     = "reservation@kuruvaislandresort.com";
$mail->FromName = "Kuruva Island";
$mail->addAddress("reservation@kuruvaislandresort.com", "Kuruva");

$mail->IsSMTP();
$mail->Host       = "smtp.gmail.com";
$mail->Port       = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth   = true;

// SMTP password from environment variable — NEVER hardcoded
$mail->Username = 'reservation@kuruvaislandresort.com';
$mail->Password = getenv('SMTP_PASS_RESERVATION') ?: '';  // Set in server environment

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer'       => false,
        'verify_peer_name'  => false,
        'allow_self_signed' => true
    )
);

$mail->isHTML(true);

$mail->Subject = "Contact Us - " . $name;
$mail->Body = "<html>
                    <head>
                        <title>Kuruva Island - Contact Us</title>
                    </head>
                    <body>
                        <h3>Enquiry From {$name}</h3>
                        <table>
                            <tr><td>Name</td><td>:</td><td>{$name}</td></tr>
                            <tr><td>Phone Number</td><td>:</td><td>{$phone}</td></tr>
                            <tr><td>Email</td><td>:</td><td>{$email}</td></tr>
                            <tr><td>Subject</td><td>:</td><td>{$subject}</td></tr>
                            <tr><td>Message</td><td>:</td><td>{$message}</td></tr>
                        </table>
                    </body>
                </html>";
$mail->AltBody = "Name: $name\nPhone: $phone\nEmail: $email\nSubject: $subject\nMessage: $message";

try {
    $mail->send();
    header('Location: thanks.php');
} catch (Exception $e) {
    error_log('Mailer Error: ' . $mail->ErrorInfo);
    http_response_code(500);
    echo "Sorry, the message could not be sent. Please try again later.";
}