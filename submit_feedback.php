<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $feedback = htmlspecialchars(trim($_POST["feedback"]));

    // Optionally save to a text file
    $entry = "Name: $name\nEmail: $email\nFeedback: $feedback\n---\n";
    file_put_contents("feedbacks.txt", $entry, FILE_APPEND);

    // Response message
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Feedback Received</title>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <header>
            <h1>Thank You!</h1>
        </header>
        <div class='container'>
            <p>Hi <strong>$name</strong>, your feedback has been received.</p>
            <p><strong>Your Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$feedback</p>
            <p><a href='feedback.html'>Go back</a></p>
        </div>
        <footer>
            <p>&copy; 2025 METROVILLE EDGES CO.LTD. All rights reserved.</p>
        </footer>
    </body>
    </html>";
} else {
    // If accessed without POST
    header("Location: feedback.html");
    exit();
}
?>
