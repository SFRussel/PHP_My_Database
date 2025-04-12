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

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["Id"]. " - Name: " . $row["First_name"]. " " . $row["Last_name"]. " " . $row["Middle_Initial"]. " - Job: " . $row["Job_Desc"] . "<br>";
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["Custom_Id"]. " - Name: " . $row["C_Name"]. " " . $row["C_Surname"] . "<br>";
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo "ID: " . $row["Id"] . "<br>";
echo "Name: " . $row["First_name"] . "<br>";
echo "Last Name: " . $row["Last_name"] . "<br>";
echo "<br>";
}
} else {
echo "0 results";
}
?>