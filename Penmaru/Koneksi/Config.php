<?php

$host = "Localhost";
$username = "root";
$password = "";
$database = "Penmaru";

$koneksi = new mysqli ($host, $username, $password, $database);
if ($koneksi) {
    echo "Database Terkoneksi";
} else {
    echo "Database Tidak Terkoneksi";
}
?>