<?php 
$servername = "localhost";
$username   = "root";
$password   = "Fathur300904";
$database   = "topupgame";


$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>