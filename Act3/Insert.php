<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "adet_2025_russel";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$C_ID = "5";
$C_Name = "Aaron";
$C_Surname = "Gutierez";

$sql = "INSERT INTO customer (Custom_Id, C_Name, C_Surname) VALUES ('$C_ID', '$C_Name', '$C_Surname')";

if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>