<?php
$servername = "localhost";
$username = "root";
$password = "";
$adatbazis = "registration";

$conn = mysqli_connect($servername, $username, $password, $adatbazis);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}