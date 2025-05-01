<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Basic validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Connect to MySQL
        $conn = new mysqli("localhost", "root", "", "vogue");

        if ($conn->connect_error) {
            die("Database connection failed: " . $conn->connect_error);
        }

        // Insert query using prepared statements
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "Message sent successfully!";
        } else {
            echo "Error saving message: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Please fill out all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
