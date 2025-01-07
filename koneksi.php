<?php
$host = 'localhost';
$user = 'root'; // ganti dengan username database Anda
$password = ''; // ganti dengan password database Anda
$dbname = 'sisman';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
