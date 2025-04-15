<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form inputs
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Email details
    $to = "bmusana0@gmail.com";
    $subject = "New Feedback from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "You received new feedback:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you, $name! Your feedback has been sent successfully.</h2>";
    } else {
        echo "<h2>Sorry, there was a problem sending your feedback. Please try again later.</h2>";
    }
} else {
    // Not a POST request
    header("Location: feedback.html");
    exit();
}
?>

