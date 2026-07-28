<?php

// session_start();

$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = '';
$dbname = 'hiv_db';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>