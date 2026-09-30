<?php

if (!function_exists('send_email')) {
         function send_email($email,$name,$body){
             log_message('error',print_r($body,true));
            $apiKey = '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';
            $url = 'https://api.brevo.com/v3/smtp/email';
    
            $data = [
                'sender' => [
                    'name' => $name,
                    'email' => 'noreply@kuruvaislandresort.com',
                ],
                'to' => [
                    [
                        'email' => 'reservation@kuruvaislandresort.com',
                        'name' => 'kuruva island'
                    ]
                ],
                'subject' => 'Contact Form',
                'htmlContent' => $body,
            ];
    
            $ch = curl_init($url);
    
            $headers = [
                'Accept: application/json',
                'api-key: ' . $apiKey,
                'Content-Type: application/json',
            ];
    
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    
            $response = curl_exec($ch);
            $error = curl_error($ch);
            
            log_message('error', 'Response: ' . print_r($response, true));
            log_message('error', 'Error: ' . print_r($error, true));
    
            curl_close($ch);
    
            if ($error) {
                return ['error' => $error];
            } else {
                return json_decode($response, true);
            }
        }
    }
    
if (!function_exists('send_reservation_email')) {
         function send_reservation_email($name, $body){
            $apiKey = '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';
            $url = 'https://api.brevo.com/v3/smtp/email';
    
            $data = [
                'sender' => [
                    'name' => $name,
                    'email' => 'noreply@kuruvaislandresort.com',
                ],
                'to' => [
                    [
                        'email' => 'reservation@kuruvaislandresort.com',
                        'name' => 'kuruva island'
                    ]
                ],
                'subject' => 'Contact Form',
                'htmlContent' => $body,
            ];
    
            $ch = curl_init($url);
    
            $headers = [
                'Accept: application/json',
                'api-key: ' . $apiKey,
                'Content-Type: application/json',
            ];
    
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    
            $response = curl_exec($ch);
            $error = curl_error($ch);
            
            log_message('error', 'Response: ' . print_r($response, true));
            log_message('error', 'Error: ' . print_r($error, true));
    
            curl_close($ch);
    
            if ($error) {
                return ['error' => $error];
            } else {
                return json_decode($response, true);
            }
        }
    }
    
?>