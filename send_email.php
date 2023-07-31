<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@glowmotionpictures.com"; // Replace with your email address
    $subject = "Form Submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = "Name: $name\nEmail: $email";

    if (mail($to, $subject, $message)) {
        echo "Form submitted successfully!";
    } else {
        echo "Form submission failed!";
    }
}
?>
