<?php
$servername = "mwd.dubaicollegedev.me";
$username = "mwd_mark";
$password = "lesob123!!";
$dbname = "mwd_lesob";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
