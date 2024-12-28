<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "auth";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Ошибка соединения: " . $conn->connect_error);
}
?>