<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $to = 'binuyoi@gmail.com'; // Replace with the recipient's email address
    $subject = 'Test Email from PHP';
    $message = 'Hello! This is a test email sent from a PHP script.';
    $senderEmail = filter_var($_POST['Hckr@sportybet.com'], FILTER_SANITIZE_EMAIL);

    // Define the headers
    $headers = 'From: ' . $senderEmail . "\r\n" .
               'Reply-To: ' . $senderEmail . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Send the email
    if (filter_var($senderEmail, FILTER_VALIDATE_EMAIL) && mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Email sending failed. Please check the sender email.';
    }
} else {
    // Display the form
    ?>
    <form method="post" action="">
        <label for="sender_email">Your Email:</label>
        <input type="email" id="sender_email" name="sender_email" required>
        <button type="submit">Send Email</button>
    </form>
    <?php
}
?>
