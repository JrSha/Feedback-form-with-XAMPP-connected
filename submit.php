<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mailid = $_POST['mailid'];
$subject = $_POST['subject'];
// Create connection to db1 database
$conn = new mysqli('localhost', 'root', '', 'db1');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into feedback(firstname, lastname, mailid, subject) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $mailid, $subject);
    $stmt->execute();
    header("Location: f.php");
    echo "New records created successfully";
    
    $stmt->close();
    $conn->close();
}
    ?>