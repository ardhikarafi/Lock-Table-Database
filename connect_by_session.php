<?php
session_start();
$username = $_SESSION['username'];
$pass = $_SESSION['pass'];
$hostname = gethostname();
$host = gethostbyname($hostname);
$db = "tugas";

$conn = mysqli_connect($host, $username, $pass, $db);
$rootconn = mysqli_connect("localhost", "root", "", $db);
?>