<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation_form extends MY_Controller {

    public function __construct () {
        parent::__construct();
        $this->load->model('reservation_from_m');  // Assuming model name is correct
    }
    
    public function form() {
        if($this->input->post()){
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $date = $this->input->post('date');
            $message = $this->input->post('message');
            $recaptchaResponse = $this->input->post('g-recaptcha-response');
            $ip_address = $this->input->post('ip_address');
            $current_url = $this->input->post('current_url');
            $location = $this->input->post('location');
            
            // Check if the message contains any links or HTML symbols like < > /
            if (preg_match('/https?:\/\/[^\s]+|[<>\/]/', $message)) {
                // Redirect to a page notifying the user that links or HTML-like symbols are not allowed
                redirect('https://kuruvaislandresort.com/error');
                return;
            }

            // Check if the message is longer than 75 characters
            if (strlen($message) > 75) {
                // Redirect to a page notifying the user that the message is too long
                redirect('https://kuruvaislandresort.com/error');
                return;
            }

            // Check if the message contains non-English characters
            if (!preg_match('/^[\x20-\x7E]*$/', $message)) {
                redirect('https://kuruvaislandresort.com/error');
                return;
            }
            
            $today = date('Y-m-d');  // Get today's date
            if (strtotime($date) < strtotime($today)) {
                // Redirect to an error page if the date is in the past
                redirect('https://kuruvaislandresort.com/error');
                return;
            }
            
            $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
            $phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
            $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
            
            // Verify reCAPTCHA
            $secretKey = '6Les00oqAAAAACqQH08EaCG1YrM-YxpaxHz5kOPM'; // Replace with your secret key
            $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}");
            $responseData = json_decode($verifyResponse);

            // If reCAPTCHA is successful and location is empty
            if($responseData->success && empty($location)) {
                // Proceed with saving data and sending email
                $user = [
                    'name'       => $name,
                    'phone'      => $phone,
                    'date'       => $date,
                    'message'    => $message,
                    'created_on' => date('Y-m-d H:i:s'),
                ];

                // Insert into the database
                if ($this->db->insert('reservation_form', $user)) {
                    // Send email after successful insert
                    $this->send_mail($name, $phone, $date, $message, $ip_address, $current_url);
                    redirect('https://kuruvaislandresort.com/thanks');
                } else {
                    redirect('https://kuruvaislandresort.com/error');
                }
            } else {
                // reCAPTCHA failed
                redirect('https://kuruvaislandresort.com/error');
            }
        }
    }

    // Send email function
    public function send_mail($name, $phone, $date, $message, $ip_address, $current_url) {
        $body = "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <title>Reservation Form</title>
        </head>
        <body style=\"font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; padding: 20px;\">
            <div style=\"max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\">
                <h2 style=\"text-align: center; color: #333;\">Reservation Form</h2>
                <p>Dear Admin,</p>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Date:</strong> $date</p>
                <p><strong>Message:</strong> $message</p>
                <p><strong>Message sent from:</strong> $current_url</p>
                <p><strong>User IP:</strong> $ip_address</p>
            </div>
        </body>
        </html>";

        // Assuming send_reservation_email is a helper function to send email
        if (send_reservation_email($name, $body)) {
            log_message('info', 'Reservation email sent successfully.');
        } else {
            log_message('error', 'Failed to send reservation email.');
        }
    }
}
// private function send_mail($name, $phone, $date, $message, $emailTo) {
    // if (!empty($name) && !empty($phone)) {    
    // $data = [
    //     'name' => $name,
    //     'phone' => $phone,
    //     'date' => $date,
    //     'message' => $message,
    //     'emailTo' => $emailTo,
    //     'created_on' => date('Y-m-d H:i:s'),
    // ];

    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, "https://trogonmedia.com/send_email_api/reservation_kuruva.php");
    // curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $response = curl_exec($ch);
    // curl_close($ch);
    
    // if ($response === false) {
    //     set_alert('message_error', 'Error occurred while sending the email!');
    // } else {
    //     set_alert('message_success', 'Reservation Successful!');
    // }
    
    // }
    // }