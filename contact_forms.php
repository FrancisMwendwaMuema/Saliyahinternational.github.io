<?php
// Assuming you have a MySQL database set up with the following credentials
$servername = "localhost";
$username = "francis";
$password = "itel";
$dbname = "con";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Prepare and execute an SQL statement to insert the form data into the database
$sql = "INSERT INTO help_requests (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
























<?php
// Assuming you have a MySQL database set up with the following credentials
$servername = "localhost";
$username = "francis";
$password = "itel";
$dbname = "con";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST["name"];
$contact = $_POST["contact"];
$email = $_POST["email"];

// Prepare and execute an SQL statement to insert the form data into the database
$sql = "INSERT INTO contacts (name, contact, email) VALUES ('$name', '$contact', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>