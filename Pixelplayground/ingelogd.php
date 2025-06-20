<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "gamesite";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
?>