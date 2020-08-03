<?php
    $name = "Name";

    if(isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    $message = "Hello";
    $message .= "Salutations $name";

    $to_email = "dbrogdon91@gmail.com";
    $subject = "This is a test";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';
    $headers[] = 'From: Biloo <noreply@ydomain.com>';

    mail($to_email, $subject, $message, implode("\r\n", $headers));
?>