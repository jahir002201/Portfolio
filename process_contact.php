<?php
include 'includes/config.php';
include 'classes/Database.php';
include 'classes/Portfolio.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $portfolio = new Portfolio();
    if ($portfolio->addContact($name, $email, $message)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
