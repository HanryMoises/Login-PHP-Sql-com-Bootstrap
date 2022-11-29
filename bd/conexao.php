<?php
$servername = "localhost";
$database = "ex_login";
$username = "hanry_moises";
$password = "123456";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>