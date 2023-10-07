<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Set the recipient email address here kyasinthk@hyafa.co.tz
    $recipient_email = "kyasinthk@hyafa.co.tz";
    
    // Email subject
    // $subject = "New Contact Form Submission from $name";
    
    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message: $message\n";
    
    // Send the email
    $headers = "From: $email";
    
    if (mail($recipient_email, $sub ject, $email_content, $headers)) {
        // email sent successful
    } else {
        // some fields might be missing
    }
}
?>
