<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $to = "bmusana0@gmail.com";
    $subject = "Feedback from " . $name;
    $body = "Name: " . $name . "\nEmail: " . $email . "\nFeedback: " . $feedback;

    if (mail($to, $subject, $body)) {
        echo "Thank you for your feedback!";
    } else {
        echo "Failed to send feedback.";
    }
}
?>