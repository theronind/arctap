<?php
if ( $_POST ) {
    $hide    = $_POST['hide'];
    $name    = trim( $_POST['name'] );
    $company = trim( $_POST['company'] );
    $phone   = trim( $_POST['phone'] );
    $email   = trim( $_POST['email'] );
    $website = trim( $_POST['website'] );
    $budget  = trim( $_POST['budget'] );
    $message = trim( $_POST['message'] );

    // cleanse user first name input
    $strip_HTMLtags_name    = strip_tags( $_POST ['name'] );
    $strip_HTMLtags_company = strip_tags( $_POST ['company'] );
    $strip_HTMLtags_phone   = strip_tags( $_POST ['phone'] );
    $strip_HTMLtags_email   = strip_tags( $_POST ['email'] );
    $strip_HTMLtags_website = strip_tags( $_POST ['website'] );
    $strip_HTMLtags_budget  = strip_tags( $_POST ['budget'] );
    $strip_HTMLtags_message = strip_tags( $_POST ['message'] );

    // non-client form variables
    $error = FALSE;

    // admin email
    $arctap_email  = "grayghost@grayghostvisuals.com";
    $subject       = "Wow! It's an ArcTap Work Inquiry from $name. Yeehaw!";
    $body          = "Client: $name \n\r";
    $body         .= "Company: $company \n\r";
    $body         .= "Phone: $phone \n\r";
    $body         .= "Email: $email \n\r";
    $body         .= "Website: $website \n\r";
    $body         .= "Budget: $budget \n\r";
    $body         .= "Message: $message";

    // client email subject line
    $client_subject = "Your ArcTap work inquiry has been received.";
    //client email message
    $client_body = "Hey there $name. We have your information and inquiry for our team at ArcTap. Please be patient while we return your message to $email.";

    $headers  = "From: $email \r\n";
    $headers .= "Reply-To: " . strip_tags($arctap_email) . '\r\n';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if ( isset( $_POST['submit'] ) || $error == true ) {

        // first name
        if ( empty( $_POST['name'] ) && $error ) {
            $error = TRUE;
        }

        // email
        if ( empty( $_POST['email'] ) || !preg_match( '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email ) ) {
            $error = TRUE;
        }

        if ( !preg_match( '/^((1-)?\d{3}-)\d{3}-\d{4}$/', $phone ) ) { // Validate a US phone Number
            $error = TRUE;
        }

        // first name
        if ( empty( $_POST['budget'] ) && $error ) {
            $error = TRUE;
        }

        // first name
        if ( empty( $_POST['message'] ) && $error ) {
            $error = TRUE;
        }

        // if no error is found
        if ( !$error ) {

            // thank you message to the user
            echo htmlspecialchars("<div class=\"server-confirm-msg g4\">
                                       <h2>Thank you $name!</h2>
                                       <p>Your inquiry with ArcTap was sent with success. We'll be in touch very, very soon at $email. Thanks for picking us and Cheers!</p>
                                   </div>");

            $mail_sent = mail( $arctap_email, $subject, $body, "From: team@arctap.com" );

            // send mail to the user
            if ( $mail_sent == TRUE ) {
              mail( $email, $client_subject, $client_body, "From: ArcTap.com" );
            }
        }
    }else {
        $error = TRUE;
    }
}
?>