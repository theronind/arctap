<?php
if ( $_POST ) {
    $name     = $_POST["name"];
    $email    = $_POST["email"];
    $company  = $_POST["company"];
    $budget   = $_POST["budget"];
    $message  = $_POST["message"];

    if(get_magic_quotes_gpc()) {
        $company = stripslashes($company);
        $message = stripslashes($message);
    }

    $address  = "team@arctap.com";
    $subject  = "Inquiry: " . $name;
    $body     = "<html><body>";
    $body    .= "<strong>Name</strong>: " . $name . "<br/>";
    $body    .= "<strong>Email</strong>: " . $email . "<br/>";
    $body    .= "<strong>Company</strong>: " . $company . "<br/>";
    $body    .= "<strong>Budget</strong>: " . $budget . "<br/>";
    $body    .= "<strong>Message</strong>: " . $message;
    $body    .= "</body></html>";

    $headers  = "From: " . $email . "\r\n";
    $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    //send email
    mail($address, $subject, $body, $headers);
} ?>
