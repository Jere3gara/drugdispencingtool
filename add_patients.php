<?php
require_once("connection.php");

$sql = "INSERT INTO Admin (username, pass1, fname, lname, DOB, gender, email, phone)
VALUES ('admin_1', 'Heidi', 'Khabi', 'female','078674893928', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
