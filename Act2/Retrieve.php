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

$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
echo "<table>";
while ($row = mysqli_fetch_assoc($result)) {
echo "ID: " . $row["Custom_Id"] . "<br>";
echo "Name: " . $row["C_Name"] . "<br>";
echo "Last Name: " . $row["C_Surname"] . "<br>";
echo "<br>";
}
echo "</table>";
} else {
echo "0 results";
}
?>