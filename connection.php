<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lyra_database";

// Menciptakan koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>