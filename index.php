<html>
<body>

<?php
// Create an array of messages
$messages = array("Thank you for clicking the button!", "Thanks for your interest!", "Glad you enjoyed the website!");

// Check if the "click" variable is set in the POST data
if (isset($_POST['click'])) {
    // If the "click" variable is set, select a random message from the array
    $message = $messages[array_rand($messages)];
} else {
    // If the "click" variable is not set, use the default message
    $message = "Hello, World!";
}

// Output the message to the web page
echo $message;
?>

<!-- Create a form with a "Click Me" button that submits a POST request -->
<form method="post">
    <input type="submit" name="click" value="Click Me">
</form>

</body>
</html>