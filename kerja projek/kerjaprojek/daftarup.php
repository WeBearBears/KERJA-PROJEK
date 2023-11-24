<?php
// Check if the form is submitted
include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $sekolah = $_POST["sekolah"];
    $no_telpon = $_POST["no_telpon"];
    $lomba = $_POST ['lomba'];

    $sql = "INSERT INTO tc VALUES (NULL, '$nama', '$sekolah', '$no_telpon', '$lomba')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("Location: ending.php?nama=$nama");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // $conn->close();
} else {
    echo "Form not submitted.";
}
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     // Get form data
//     $nama = $_POST["nama"];
//     $sekolah = $_POST["sekolah"];
//     $no_telpon = $_POST["no_telpon"];

//     // Validate and sanitize data if needed

//     // Database connection parameters
  
//     // Check connection
    

//     // SQL query to insert data into the table
   
//     $sql = "INSERT INTO tc VALUES (NULL, '$nama', '$sekolah', '$no_telpon')";
//     // $result = $conn->query($sql);

//     if ($conn->query($sql) === TRUE) {
//         // Redirect to another page after successful registration
//         header("Location: ending.php");
//         exit(); // Make sure to exit after the header redirect
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     // Close connection
//     $conn->close();
// } else {
//     echo "Form not submitted.";
// }
?>
