<?php

    //GET some values
    $email = strip_tags($_POST['email']);
    $from = $email;
    $name = strip_tags($_POST['name']);
    $inquiry =  str_replace('\\"','"',str_replace('\\\'','\'',$_POST['message']));   //end of message

    $to = 'rafael.higueros@gmail.com';
    $subject = 'New Message from SnapTag Website!';

    $message = 'From: '.$name;
    $message .= '<br /> Message: ' .$inquiry;

    $headers  = "From: $email \r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

   

    //validate destination
    if ( $email == '' ) {

        echo '<p id="error">Pelase type your email.</p>';

    } else if ( !preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {

        echo '<p id="error">Type a valid email adrees.</p>';

    //validate name
    } else if ( $name == '' ) {

        echo '<p id="error">Please type your name.</p>';
    
    //validate message
    } else if ( $inquiry == '' ) {

        echo '<p id="error">Please type a message.</p>';

    // now lets send the email.
    } else {

        $sent = mail($to, $subject, $message, $email, $headers);

        if($sent) {
            echo '<p id="success">Your message has been sent.</p>';
            //echo $message;
        } else {
            echo '<p id="error">Please try again later</p>';
        }

    }

?>
