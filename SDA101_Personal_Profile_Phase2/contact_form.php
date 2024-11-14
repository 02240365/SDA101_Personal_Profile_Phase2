<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set the email recipient and subject
    $to = "02240365.cst@rub.edu.bt"; 
    $subject = "New Contact Form Submission";

    // Construct the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
} else {
    echo "There was a problem with your submission, please try again.";
}
?>
