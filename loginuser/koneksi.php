<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "web_uii";

// Koneksi dan memilih database di server
mysql_connect($host,$username,$password) or die("Maaf koneksi ke database gagal");
mysql_select_db($database) or die("Database tidak bisa ditemukan");
?>
