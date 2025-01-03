<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Define the recipient email address
    $to = "waleedansari257@gmail.com"; // Replace with your email address

    // Define the subject of the email
    $subject = "New Message from $name";

    // Create the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send.";
    }
}
?>