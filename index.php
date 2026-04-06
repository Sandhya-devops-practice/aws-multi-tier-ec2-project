<?php
$conn = new mysqli("RDS-ENDPOINT", "admin", "password", "intel");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM data");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
    }
} else {
    echo "No data found";
}

$conn->close();
?>