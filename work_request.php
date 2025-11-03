<?php
include 'connection.php'; // connect to DB

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $workType = htmlspecialchars(trim($_POST['workType']));
    $details = htmlspecialchars(trim($_POST['details']));

    $sql = "INSERT INTO work_requests (name, email, workType, details) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $workType, $details);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }

    $stmt->close();
    $conn->close();
}
?>
