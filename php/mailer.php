<?php
    require_once(__DIR__ . '/../vendor/autoload.php');
    require_once(__DIR__ . '/../environment/secrets.php');
    
    if (array_key_exists('email', $_POST) && array_key_exists('message', $_POST) && array_key_exists('subject', $_POST)) {
    
        $from = new SendGrid\Email("CallyDai.com", $_ENV["cally_email"]);
        $subject = $_POST["subject"];
        $to = new SendGrid\Email("Cally Dai", $_ENV["cally_email"]);
        $content = new SendGrid\Content("text/plain", $_POST["message"] . "\n\n\n-- Sent from CallyDai.com");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        $apiKey = $_ENV["sendgrid_api_key"];
        $sg = new \SendGrid($apiKey);
        $reply_to = new SendGrid\ReplyTo($_POST["email"]);
        $mail->setReplyTo($reply_to);
        
        $response = $sg->client->mail()->send()->post($mail);
        // echo $response->statusCode();
        // print_r($response->headers());
        // echo $response->body();
    } else {
        echo 'Invalid parameters!';
        http_response_code(400);
    }
?>