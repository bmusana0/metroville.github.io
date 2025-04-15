<?php
// If this file is accessed directly (not from a Formspree redirect), redirect back
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: feedback.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You - METROVILLE EDGES CO.LTD</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .message-box {
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 500px;
    }
    h1 {
      color: #0066cc;
    }
    a {
      display: inline-block;
      margin-top: 1rem;
      text-decoration: none;
      color: #0066cc;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="message-box">
    <h1>🎉 Thank You!</h1>
    <p>Your feedback has been submitted successfully. We truly appreciate your time and thoughts.</p>
    <a href="index.html">Back to Home</a>
  </div>
</body>
</html>


