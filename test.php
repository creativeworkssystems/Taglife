<?php


$email = strip_tags($_POST['email']);
$name = strip_tags($_POST['name']);
$companyname = strip_tags($_POST['companyname']);
$phonenumber = strip_tags($_POST['phonenumber']);
$inquiry =  str_replace('\\"','"',str_replace('\\\'','\'',$_POST['message']));   //end of message

// multiple recipients
$to  = 'rafael.higueros@gmail.com';

// subject
$subject = 'New Message from SnapTag Website!';

// message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Message collected from Snaptag website</p>
  <table>
    <tr>
        <td><b>From:</b></td>
        <td>'.$name.'</td>
    </tr>
    <tr>
        <td><b>Email:</b></td>
        <td>'.$email.'</td>
    </tr>
    <tr>
        <td><b>Company Name:</b></td>
        <td>'.$companyname.'</td>
    </tr>
    <tr>
        <td><b>Phone Number:</b></td>
        <td>'.$phonenumber.'</td>
    </tr>
    <tr>
        <td><b>Message:</b></td>
        <td>'.$inquiry.'</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Snaptag Website <forbrandsy@snaptag.com>' . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
//mail($to, $subject, $message, $headers);
//
    //validate destination
    if ( $email == '' ) {

        echo '<p class="bg-danger">Pelase type your email.</p>';

    } else if ( !preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {

        echo '<p class="bg-danger">Type a valid email adrees.</p>';

    //validate name
    } else if ( $name == '' ) {

        echo '<p class="bg-danger">Please type your name.</p>';

    } else if ( $phonenumber == '' ) {

        echo '<p class="bg-danger">Please type your phone number.</p>';

    //validate message
    } else if ( $inquiry == '' ) {

        echo '<p class="bg-danger">Please type a message.</p>';

    // now lets send the email.
    } else {

        $sent = mail($to, $subject, $message, $headers);

        if($sent) {
            echo '<p class="bg-success">Your message has been sent.</p>';
            //echo $message;
        } else {
            echo '<p class="bg-danger">Please try again later</p>';
        }

    }
?>
