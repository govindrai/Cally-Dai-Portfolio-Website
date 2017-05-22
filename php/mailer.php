<?php
    require './../vendor/autoload.php';
    require './environment/secrets.php';
    
    if (array_key_exists('email', $_POST) && array_key_exists('message', $_POST) && array_key_exists('subject', $_POST)) {
    
        $from = new SendGrid\Email("", $_POST['email']);
        $subject = $_POST["subject"];
        $to = new SendGrid\Email("Cally Dai", getenv("cally_email"));
        $content = new SendGrid\Content("text/plain", $_POST["message"]);
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        $apiKey = $_ENV["sendgrid_api_key"];
        $sg = new \SendGrid($apiKey);
        $response = $sg->client->mail()->send()->post($mail);
        // echo $response->statusCode();
        // print_r($response->headers());
        // echo $response->body();
    } else {
        echo 'Invalid parameters!';
        http_response_code(400);
    }
?>