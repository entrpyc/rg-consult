<?php
if (isset($_REQUEST['email'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $to = 'contact@rgconsult.eu';
    $subject = 'Contact form entry';
    $message = $_REQUEST['message'];
    $headers = 'From: contact@rgconsult.eu' . "\r\n" .
        'Reply-To: contact@rgconsult.eu';

    $msg = 'Name: ' .$name . "\n".
        'Email: ' . $email . "\n".
        $message;
    mail($to,$subject,$msg,$headers);
    echo "Message Sent!";
}
?>
