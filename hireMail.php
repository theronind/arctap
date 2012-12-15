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

    // allow user to use html tags
    //$display_HTMLtags = htmlentities( $_POST [''] );

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
    $subject  = "Inquiry: " . $name;
    $body     = "<html><body>";
    $body    .= "<strong>Name</strong>: " . $name . "<br/>";
    $body    .= "<strong>Company</strong>: " . $company . "<br/>";
    $body    .= "<strong>Phone</strong>: " . $phone . "<br/>";
    $body    .= "<strong>Email</strong>: " . $email . "<br/>";
    $body    .= "<strong>Website</strong>: " . $website . "<br/>";
    $body    .= "<strong>Budget</strong>: " . $budget . "<br/>";
    $body    .= "<strong>Message</strong>: " . $message;
    $body    .= "</body></html>";

    $headers  = "From: " . $email . "\r\n";
    $headers .= "Reply-To: ". strip_tags($address) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if ( isset( $_POST['submit'] ) || $error == true ) {

        // first name
        if ( empty( $_POST['name'] ) && $error ) {
            $error = TRUE;
        }

        // first name
        if ( empty( $_POST['company'] ) && $error ) {
            $error = TRUE;
        }

        // first name
        if ( empty( $_POST['phone'] ) && $error ) {
            $error = TRUE;
        }

        // email
        if ( empty( $_POST['email'] ) || !preg_match( '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email ) ) {
            $error = TRUE;
        }

        // first name
        if ( empty( $_POST['website'] ) && $error ) {
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
            echo "<div class=\"thankyou g4\">
                    <h2>Thank you $name!</h2>
                    <p>Your inquiry with ArcTap was sent with success. We'll be in touch very, very soon at $email. Thanks for picking us and Cheers!</p>
                  </div>";

            // send mail to the admin
            //ini_set (SMTP, smtp@gmail.com)
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