<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kerja_projek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Don't forget to close the connection when you're done
// $conn->close();
?>