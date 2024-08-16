<?php
    include 'db.php';

    // Get order details from POST request
    $orderDetails = json_decode(file_get_contents('php://input'), true);

    session_start();

    $user = $_SESSION['username'];
    $sql1 = "SELECT * FROM users WHERE username = '$user'";
    $result = $con->query($sql1);
    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
    }
    
    // Insert order details into database
    foreach ($orderDetails as $order) {
        $title = $order['title'];
        $price = $order['price']*1000;
        $quantity = $order['quantity'];
        $date = date('Y-m-d');
        $subtotalAmount = $order['subtotal_amount']*1000;
        $sql = "INSERT INTO orders (price, title, quantity, subtotal_amount, date, user_id) VALUES ('$price', '$title', '$quantity', '$subtotalAmount', '$date', '$id')";
        if ($con->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    // Close database connection
    $con->close();
?> 

