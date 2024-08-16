<?php
require('db.php');



// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $con->real_escape_string($_POST['email']);
    $message = $con->real_escape_string($_POST['message']);

    // Insert data into the 'contact' table
    $sql = "INSERT INTO contacts (email, message) VALUES ('$email', '$message')";

    if ($con->query($sql) === TRUE) {
        header('location: index.php');
        echo "Contact details saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
