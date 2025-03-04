<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $myname = htmlspecialchars(trim($_POST['myname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    
    // Database connection
    $conn = new mysqli('localhost', 'root', 'root', 'contact_database');

    if ($conn->connect_error) {
        echo "Database connection failed: " . $conn->connect_error;
        exit();
    }

    
    $stmt = $conn->prepare("INSERT INTO user (myname, email, subject, message) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $myname, $email, $subject, $message);
        
        if ($stmt->execute()) {
            echo "Your message has been submitted successfully!";
        } else {
            echo "Error submitting your message. Please try again.";
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
