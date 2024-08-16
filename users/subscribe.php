<?php

require('db.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Create the SQL query
    $sql = "INSERT INTO subscribers (email) VALUES ('$email')";

    // Execute the query
    if ($con->query($sql) === TRUE) {
        header('location: index.php');
        echo "Thank you for subscribing!";
    } else {
        // Check if email is already subscribed
        if ($con->errno == 1062) { // 1062 is the error code for a duplicate entry
            echo "This email is already subscribed.";
        } else {
            echo "Error: " . $con->error;
        }
    }
}

$con->close();
?>
