<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notes";

$conn = new mysqli($servername, $username, $password, $dbname);


$conn->set_charset("utf8");


if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
};