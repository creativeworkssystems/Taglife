<?php


$name = trim($_POST["name"]);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$companyname = trim($_POST["companyname"]);
$phonenumber = trim($_POST["phonenumber"]);
$message = trim($_POST["message"]);
if(isset($_POST['g-recaptcha-response'])){
    $captcha = $_POST['g-recaptcha-response'];
}

//Validate the data
if (empty($name)
    OR empty($phonenumber) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($message) OR empty($captcha)
    ) {
    //http_response_code(400);
    echo "Please fill all the form inputs and check the captcha to submit.";
    exit;
}

//recipient email address.
$recipient = "rafael.higueros@gmail.com";
$subject = "New Message from TagLife Website!";

//email content.
$email_content .= "Email: $email\n\n";
$email_content = "Name: $name\n";
$email_content = "Company Name: $companyname\n";
$email_content .= "Phone: $phonenumber\n\n";
$email_content .= "Message:\n$message\n";
//email headers
//$email_headers = "From: $name <$email>";
$email_headers  = 'MIME-Version: 1.0' . "\r\n";
$email_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$email_headers .= 'From: TagLife Website <forbrandsy@taglife.com>' . "\r\n";

$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lep-woUAAAAANwXY26ycHaWw0H5SZwpzmOZIUk2&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
$decoded_response = json_decode($response, true);
if($decoded_response['success'] == true){

    // Send the email.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        //http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        //http_response_code(500);
        echo "Whoa! message could not be sent.";
    }

} else {
    //http_response_code(400);
    echo 'You are a spammer! Please make sure you checked the captcha box';
}

?>
