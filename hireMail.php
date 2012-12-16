<?php
if ( $_POST ) {
    $name    = trim( $_POST['name'] );
    $company = trim( $_POST['company'] );
    $phone   = trim( $_POST['phone'] );
    $email   = trim( $_POST['email'] );
    $website = trim( $_POST['website'] );
    $budget  = trim( $_POST['budget'] );
    $message = trim( $_POST['message'] );

    $hide    = $_POST['hide'];

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
    $address  = "grayghost@grayghostvisuals.com";
    $subject  = "ArcTap Work Inquiry from $name";
    $body     = "Name: $name \n\r";
    $body    .= "Company: $company \n\r";
    $body    .= "Phone: $phone \n\r";
    $body    .= "Email: $email \n\r";
    $body    .= "Website: $website \n\r";
    $body    .= "Budget: $budget \n\r";
    $body    .= "Message: $message";

    $headers  = "From: $email \r\n";
    $headers .= "Reply-To: " . strip_tags($address) . '\r\n';
    $headers .= 'MIME-Version: 1.0\r\n';
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1\r\n';

    if ( isset( $_POST['submit'] ) || $error == true ) {

        // empty name
        if ( empty( $_POST['name'] ) && $error ) {
            $error = TRUE;
        }
        // name < 3 chars
        if ( strlen( $_POST['name'] ) < 3 ) {
            $error = TRUE;
        }

        // empty email or pregex
        if ( empty( $_POST['email'] ) || !preg_match( '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email ) ) {
            $error = TRUE;
        }

        // empty budget
        if ( empty( $_POST['budget'] ) && $error ) {
            $error = TRUE;
        }

        // empty message
        if ( empty( $_POST['message'] ) && $error ) {
            $error = TRUE;
        }
        // message < 10 chars
        if ( strlen( $_POST['message'] ) < 10 ) {
            $error = TRUE;
        }

        // no validation errors found. please do the following magic
        if ( !$error ) {

            // thank you message to the user
            echo "<div class=\"server-success g4\">
                    <h2>Thank you $name!</h2>
                     <p>Your inquiry with ArcTap was sent with success. We'll be in touch very, very soon at $email. Thanks for picking us and Cheers!</p>
                  </div>";

            // send mail to the admin
            $mail_sent = mail( $address, $subject, $body, "From: team@arctap.com" );

            /*// send mail to the user
            if ( $mail_sent == TRUE ) {
              mail( $email, $client_subject, $client_body, "From: RochesterInstituteOfDogGrooming.com" );
            }*/
        }
    }else {
        $error = TRUE;
    }
}
?>