<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "pixelplayground";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
?>