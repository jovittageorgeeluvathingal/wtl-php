<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jo', 'milu', 'jo@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully with 2 records";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>