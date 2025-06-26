<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (!$name || !$email || !$message) {
    die('All fields are required.');
}

// You could email this or save to a file/db
echo "Thank you, $name. We received your message.";
?>
